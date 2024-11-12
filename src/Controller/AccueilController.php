<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        // Créer une liste de produits fictifs
        $produits = [
            [
                'nom' => 'Produit 1',
                'prix' => 20,
                'image' => 'produit1.jpg',
            ],
            [
                'nom' => 'Produit 2',
                'prix' => 35,
                'image' => 'produit2.jpg',
            ],
            [
                'nom' => 'Produit 3',
                'prix' => 50,
                'image' => 'produit3.jpg',
            ],
        ];

        // Renvoyer la vue avec les produits en tant que variable
        return $this->render('accueil/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}
