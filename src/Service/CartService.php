<?php

namespace App\Service;

use App\Entity\Produit;
use App\Entity\Commande;
use App\Entity\Details;
use App\Repository\CartRepository;
use App\Repository\CartItemRepository;
use App\Entity\Cart;
use App\Entity\CartItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\SecurityBundle\Security;

class CartService
{
    private $requestStack;
    private $entityManager;
		private $security;
    private $cartRepository;

    public function __construct(RequestStack $requestStack, CartRepository $cartRepository, EntityManagerInterface $entityManager, Security $security)
    {
        $this->requestStack = $requestStack;
        $this->cartRepository = $cartRepository;
        $this->entityManager = $entityManager;
				$this->security = $security;
    }
		
		// Associer le panier à l'utilisateur connecté
    public function getUserCart(): Cart
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        // Vérifier si un panier existe déjà pour cet utilisateur
        $cart = $this->cartRepository->findOneBy(['user' => $user]);

        // dd($cart);
        if (!$cart) {
            // Si aucun panier n'existe, en créer un nouveau
            $cart = new Cart();
            $cart->setUser($user);

            // $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }
        return $cart;
    }

		public function setCart(Cart $cart): void
		{
    		$session = $this->requestStack->getSession();
    		$session->set('cart_id', $cart->getId());
		}

    // Pour ajouter un produit dans le panier
    public function addProduct(Produit $produit, int $quantity = 1): void
    {
        // Récupération du panier de l'utilisateur
        $cart = $this->getUserCart();

        // Vérification des doublons dans les items existants
        foreach ($cart->getItems() as $item) { 
						if (!is_int($produit->getId())) {
    						throw new \InvalidArgumentException('L\'ID du produit doit être un entier.');
						}
   
            if ($item->getProduit()->getId() === $produit->getId()) {
                // Mise à jour de la quantité si l'article est déjà dans le panier
                $item->setQuantity($item->getQuantity() + $quantity);

								$this->entityManager->persist($item);
                $this->entityManager->flush();
                return;
            }
            
        }

        // Si le produit n'existe pas encore, créer un nouvel item
        $cartItem = new CartItem();
        $cartItem->setProduit($produit);
        $cartItem->setQuantity($quantity);
        $cartItem->setCart($cart);

        // Ajouter l'item à la collection du panier
        $cart->addItem($cartItem);

        // Persister et sauvegarder
        $this->entityManager->persist($cartItem);
        $this->entityManager->flush();
    }

    private function findCartItem(Cart $cart, Produit $produit): ?CartItem
    {
        foreach ($cart->getItems() as $item) {
            if ($item->getProduit()->getId() === $produit->getId()) {
                return $item;
            }
        }

        return null;
    }
    
    public function decreaseProductQuantity(Produit $produit, int $quantity = 1): void
    {
        $cart = $this->getUserCart();

        $productId = $produit->getId();

        $cartItem = $this->findCartItem($cart, $produit);

         if (!$cartItem) {
        return; // Le produit n'est pas dans le panier, rien à faire
    }

        $newQuantity = $cartItem->getQuantity() - $quantity;

        if ($newQuantity <= 0) {
            $this->entityManager->remove($cartItem); // Supprime le produit si la quantité atteint 0
        } else {
            $cartItem->setQuantity($newQuantity);
        }

        $this->entityManager->flush(); // Sauvegarde les changements
    }   

        // Vérifiez si le produit est dans le panier
        // if (!isset($cart[$productId])) {
        //     return; // Le produit n'est pas dans le panier, rien à faire
        // }

        // // Réduisez la quantité
        // $cart[$productId] -= $quantity;

        // Si la quantité tombe à 0 ou moins, supprimez le produit

// if ($cart[$productId] <= 0) {
         //   unset($cart[$productId]);
       // }

    //     $this->saveCart($cart);
    // }
    
    // Pour supprimer un produit du panier    
    public function removeProduct(Produit $produit): void
    {
        $cart = $this->getUserCart();

        foreach ($cart->getItems() as $item) {
            if ($item->getProduit()->getId() === $produit->getId()) {
                $cart->getItems()->removeElement($item);
                $this->entityManager->remove($item);
                $this->entityManager->flush();
                return;
            }
        }
    }

    // Compter les articles dans le panier à afficher dans la badge de notification
		public function getTotalQuantity(): int
		{
				$cart = $this->getUserCart(); // Récupère le panier actuel
				$totalQuantity = 0;

				foreach ($cart->getItems() as $item){
						$totalQuantity += $item->getQuantity();
				}			
				return $totalQuantity;
		}
    
    public function validationCommande(): Commande
    {
        $cart = $this->getUserCart();
        $user = $this->security->getUser();

        if (!$user) {
            throw new \LogicException('Utilisateur non connecté');
        }

        $commande = new Commande();
        $commande->setUser($user);
        $commande->setDate(new \DateTimeImmutable());
        $commande->setTotal(0);

        $total = 0;
        foreach ($cart->getItems() as $cartItem) {
            $details = new Details();
            $details->setCommande($commande);
            $details->setProduit($cartItem->getProduit());
            $details->setQuantite($cartItem->getQuantity());
            $details->setPrix($cartItem->getProduit()->getPrixHt());

            $total += $cartItem->getProduit()->getPrixHt() * $cartItem->getQuantity();
            $commande->getArticles()->add($details);
        }

        $commande->setTotal($total);

        // Supprimer les éléments du panier
        foreach ($cart->getItems() as $cartItem) {
            $this->entityManager->remove($cartItem);
        }
        $this->entityManager->persist($commande);
        $this->entityManager->flush();

        return $commande;
    }
}
