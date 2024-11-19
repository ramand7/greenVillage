<?php

namespace App\Service;

use App\Entity\Produit;
use App\Entity\Cart;
use App\Entity\CartItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService
{
    private RequestStack $requestStack;
    private EntityManagerInterface $em;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    public function getCart(): Cart
    {
        $session = $this->requestStack->getSession();
        $cartId = $session->get('cart_id');

        if ($cartId) {
            $cart = $this->em->getRepository(Cart::class)->find($cartId);
            if ($cart) {
                return $cart;
            }
        }

        $cart = new Cart();
        $this->em->persist($cart);
        $this->em->flush();

        $session->set('cart_id', $cart->getId());

        return $cart;
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

    public function clearCart(): void
    {
        $cart = $this->getCart();

        foreach ($cart->getItems() as $item) {
            $this->em->remove($item);
        }

        $this->em->flush();
    }
}
