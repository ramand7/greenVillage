<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

// #[Route('/panier', name:'panier_)]

class PanierController extends AbstractController
{
    
		// #[Route('/panier', name: 'app_panier')]
    public function index(): Response
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
 
		// #[Route('/ajouter/{id}', name: 'ajouter' )]
		public function ajouter($id, SessionInterface $session)
		{
			dd($session);
		}




}
