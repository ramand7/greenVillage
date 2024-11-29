<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    private CartService $cartService;

		public function __construct(CartService $cartService)
		{
				$this->cartService = $cartService;
		}
		
		#[Route('/cart', name: 'cart_index')]
    public function index(CartService $cartService): Response
    {
        // Récupérer le panier de l'utilisateur connecté
				$cart = $cartService->getUserCart();

				// if (!$cart) {
				// 		$cart = $this->cartService->getUserCart();
				// }
				// Renvoyer le panier à la vue
        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
				]);
    }

		#[Route('/cart/add/{id}', name: 'cart_add', requirements: ['id' => '\d+'])]
		public function add(int $id, ProduitRepository $produitRepository, CartService $cartService): Response
		{
				$produit = $produitRepository->find($id);

				if (!$produit) {
						throw $this->createNotFoundException('Produit non trouvé.');
				}

				$cartService ->addProduct($produit);

				return $this->redirectToRoute('cart_index');
		}

		#[Route('/cart/remove/{id}', name: 'cart_remove', requirements: ['id' => '\d+'])]
		public function remove(int $id, ProduitRepository $produitRepository, CartService $cartService): response
		{
				$produit = $produitRepository->find($id);

				if (!$produit) {
						throw $this->createNotFoundException('Produit non trouvé.');
				}

				$cartService->removeProduct($produit);

				return $this->redirectToRoute('cart_index');
		}

}
