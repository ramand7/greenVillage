<?php

namespace App\Service;

use App\Entity\User\Utilisateur;
use App\Entity\Produit;
use App\Repository\CartRepository;
use App\Entity\Cart;
use App\Entity\CartItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\SecurityBundle\Security;
// use Symfony\Component\HttpFoundation\Session\Session;

class CartService
{
    // private $session;
    private $requestStack;
    private $em;
		private $security;
    private $cartRepository;


    public function __construct(RequestStack $requestStack, CartRepository $cartRepository, EntityManagerInterface $em, Security $security)
    {
        
				$this->requestStack = $requestStack;
        $this->em = $em;
        $this->security = $security;
				// $user = $this->security->getUser; dd($user);
        // $this->session = $session;

    }
		
		public function getCart(): Cart
    {
        $session = $this->requestStack->getSession();
        $cartId = $session->get('cart_id');
				// dd($session);
				// Si un utilisateur est connecté, cherchez son panier
				$user = $this->security->getUser();
			
				if ($user) {
					$cart = $this->em->getRepository(Cart::class)->findOneBy(['user' => $user, 'isActive' => true]);
					
						if ($cart) {

							$session->set('cart_id', $cart->getId()); 
							// dd($cart);
							$this->em->persist($cart);
							$this->em->flush();
							dd($cart);
							return $cart; 
						}					
				} 
					
				// Sinon, créez un nouveau panier
				// dd($user);
				$cart = new Cart();
				if ($user) {
					$cart->setUser($user); 
				}
				
        $this->em->persist($cart);

        $this->em->flush();

        $session->set('cart_id', $cart->getId());

        return $cart;
    }

		public function setCart(Cart $cart): void
		{
    		$session = $this->requestStack->getSession();
    		$session->set('cart_id', $cart->getId());
		}

		private function getUser(): ?Utilisateur
		{
    
				$user = $this->security->getUser();

				return $this;
		
		// return $this->requestStack->getSession()->get('security.token_storage')->getToken()->getUser();
		}

    public function addProduct(Produit $produit, int $quantity = 1): void
    {
        $cart = $this->getCart();

        foreach ($cart->getItems() as $item) {
            if ($item->getProduit()->getId() === $produit->getId()) {
                $item->setQuantity($item->getQuantity() + $quantity);
                $this->em->flush();
                return;
            }
        }

        $cartItem = new CartItem();
        $cartItem->setProduit($produit);
        $cartItem->setQuantity($quantity);
        $cartItem->setCart($cart);

        $this->em->persist($cartItem);
        $this->em->flush();
    }

    public function removeProduct(Produit $produit): void
    {
        $cart = $this->getCart();

        foreach ($cart->getItems() as $item) {
            if ($item->getProduit()->getId() === $produit->getId()) {
                $cart->getItems()->removeElement($item);
                $this->em->remove($item);
                $this->em->flush();
                return;
            }
        }
    }

    // public function clearCart(): void
    // {
    //     $cart = $this->getCart();

    //     foreach ($cart->getItems() as $item) {
    //         $this->em->remove($item);
    //     }

    //     $this->em->flush();
    // }

    // public function persistCart()
    // {
    //     $user = $this->security->getUser();
    //     if ($user) {
    //         $cart = $this->session->get('cart', []);
    //         $existingCart = $this->cartRepository->findOneBy(['user' => $user]);

    //         if (!$existingCart) {
    //             $existingCart = new Cart();
    //             $existingCart->setUser($user);
    //         }

    //         $existingCart->setItems($cart);
    //         $this->em->persist($existingCart);
    //         $this->em->flush();
    //     }
    // }

    // public function loadCart()
    // {
    //     $user = $this->security->getUser();
    //     if ($user) {
    //         $existingCart = $this->cartRepository->findOneBy(['user' => $user]);

    //         if ($existingCart) {
    //             $this->session->set('cart', $existingCart->getItems());
    //         }
    //     }
    // }


		public function getTotalQuantity(): int
		{
				$cart = $this->getCart(); // Récupère le panier actuel
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
