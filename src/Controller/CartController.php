<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    // Injection du service CSRFTokenManager dans le contrôleur
		private $csrfTokenManager;
		private CartService $cartService;

		public function __construct(CartService $cartService, CsrfTokenManagerInterface $csrfTokenManager)
		{
				$this->cartService = $cartService;
				$this->csrfTokenManager = $csrfTokenManager;
		}
		
		#[Route('/cart', name: 'cart_index')]
    public function index(CartService $cartService): Response
    {
        // Récupérer le panier de l'utilisateur connecté
				$cart = $cartService->getUserCart();

				// Renvoyer le panier à la vue
        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
				]);
    }

		#[Route('/cart/add/{id}', name: 'cart_add', requirements: ['id' => '\d+'])]
		public function add(int $id, Request $request, ProduitRepository $produitRepository, CartService $cartService): Response
		{
				// Vérifier le token CSRF
				$token = $request->query->get('_token');
				if (!$this->csrfTokenManager->isTokenValid(new CsrfToken('cart_add', $token))) {
						throw $this->createAccessDeniedException('Requête CSRF invalide.');
				}
				
				
				$quantity = $request->get('quantity', 1);
				
				$id = (int) $request->get('id'); // Convertir en entier 
				// dd($id);

				if (!$request->isXmlHttpRequest() && !$request->isMethod('GET')) {
						throw $this->createAccessDeniedException('Requête invalide.');
				}


				// Vérifiez que $id correspond bien à l'article souhaité
				$produit = $produitRepository->find($id);
				$cartService ->addProduct($produit, $quantity);
				
				if (!$produit) {
						throw $this->createNotFoundException('Produit non trouvé.');
				}

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
