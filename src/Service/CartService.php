<?php

namespace App\Service;

use App\Entity\Produit;
use App\Repository\CartRepository;
use App\Entity\Cart;
use App\Entity\CartItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Routing\Annotation\Route;

class CartService
{
    private $requestStack;
    private $entityManager;
		private $security;
    private $cartRepository;

    public function __construct(RequestStack $requestStack, CartRepository $cartRepository, EntityManagerInterface $entityManager, Security $security)
    {
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
				$this->security = $security;
        $this->cartRepository = $cartRepository;
    }
		
		public function getUserCart(): Cart
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();// dd($user);

        if (!$user) {
            // throw new \LogicException('Aucun utilisateur connecté');
            
        }

        // Vérifier si un panier existe déjà pour cet utilisateur
        $cart = $this->cartRepository->findOneBy(['user' => $user]);

        if (!$cart) {
            // Si aucun panier n'existe, en créer un nouveau
            $cart = new Cart();
            $cart->setUser($user);

            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }
        return $cart;
    }

    
    
    
    // public function getCart(): Cart
    // {
    //     $session = $this->requestStack->getSession();
    //     $cartId = $session->get('cart_id');

    //     // Si un utilisateur est connecté, cherchez son panier
		// 		$user = $this->security->getUser();

		// 			if ($user) {
		// 				$cart = $this->em->getRepository(Cart::class)->findOneBy(['user' => $user, 'isActive' => true]);
		// 				if (!$cart) {
		// 						throw $this->NotFoundException('Votre panier est vide.');
		// 				}
								
		// 						$session->set('cart_id', $cart->getId());
		// 						return $cart;
		// 				}	
		// 		    $cart = new Cart();
		// 				if ($user) {
		// 				$cart->setUser($user); 
		// 				}
				
				
				// Sinon, créez un nouveau panier
			
        // $this->em->persist($cart); 

        // $this->em->flush();

        // $session->set('cart_id', $cart->getId());

        // return $cart;
    // }

		public function setCart(Cart $cart): void
		{
    		$session = $this->requestStack->getSession();
    		$session->set('cart_id', $cart->getId());
		}

		// private function getUser(): ?Utilisateur
		// {
    
		// 		$user = $this->security->getUser();

		// 		return $this;
		
		// return $this->requestStack->getSession()->get('security.token_storage')->getToken()->getUser();
		// }

    public function addProduct(Produit $produit, int $quantity = 1): void
    {
        $cart = $this->getUserCart();

        foreach ($cart->getItems() as $item) {
            if ($item->getProduit()->getId() === $produit->getId()) {
                $item->setQuantity($item->getQuantity() + $quantity);
                $this->entityManager->flush();
                return;
            }
        }

        $cartItem = new CartItem();
        $cartItem->setProduit($produit);
        $cartItem->setQuantity($quantity);
        $cartItem->setCart($cart);

        $this->entityManager->persist($cartItem);
        $this->entityManager->flush();
    }

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

		public function getTotalQuantity(): int
		{
				$cart = $this->getUserCart(); // Récupère le panier actuel
				$totalQuantity = 0;

				foreach ($cart->getItems() as $item){
						$totalQuantity += $item->getQuantity();
				}
				
				return $totalQuantity;
		}






//     public function decreaseProductQuantity(Produit $produit, int $quantity): void
// {
//     $cart = $this->getCart();

//     $productId = $produit->getId();

//     // Vérifiez si le produit est dans le panier
//     if (!isset($cart[$productId])) {
//         return; // Le produit n'est pas dans le panier, rien à faire
//     }

//     // Réduisez la quantité
//     $cart[$productId] -= $quantity;

//     // Si la quantité tombe à 0 ou moins, supprimez le produit
//     if ($cart[$productId] <= 0) {
//         unset($cart[$productId]);
//     }

//     $this->saveCart($cart);
// }

}
