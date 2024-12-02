<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande')]
class CommandeController extends AbstractController
{
    #[Route('/validation', name: 'validation_commande')]
    public function validation(CartService $cartService): Response
    {
        $commande = $cartService->validationCommande();

        return $this->redirectToRoute('paiement', ['id' => $commande->getId()]);
    }

    
    // #[Route('/commande', name: 'app_commande')]
    // public function index(): Response
    // {
    //     return $this->render('commande/index.html.twig', [
    //         'controller_name' => 'CommandeController',
    //     ]);
    // }
}
