<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    // #[Route('/', name: 'app_accueil')]
    // public function index(): Response
    // {
        // Créer une liste de produits fictifs
        // $produits = [
        //     [
        //         'nom' => 'Produit 1',
        //         'prix' => 20,
        //         'image' => 'produit1.jpg',
        //     ],
        //     [
        //         'nom' => 'Produit 2',
        //         'prix' => 35,
        //         'image' => 'produit2.jpg',
        //     ],
        //     [
        //         'nom' => 'Produit 3',
        //         'prix' => 50,
        //         'image' => 'produit3.jpg',
        //     ],
        // ];

        // Renvoyer la vue avec les produits en tant que variable
    //     return $this->render('accueil/index.html.twig', [
    //         'produits' => $produits,
    //     ]);
    // }

//    #[Route('/', name: 'app_accueil', requirements: ['id' => '\d+'], methods: ['GET'])]
    // public function index(int $id, CategoriesRepository $categoriesRepository): Response
    // {   
    // 		$categorie = $categoriesRepository->find($id);
    // // dd($categorie);
    //     $produits = [
    //         [
    //             'nom' => 'Produit 1',
    //             'prix' => 20,
    //             'image' => 'produit1.jpg',
    //         ],
    //         [
    //             'nom' => 'Produit 2',
    //             'prix' => 35,
    //             'image' => 'produit2.jpg',
    //         ],
    //         [
    //             'nom' => 'Produit 3',
    //             'prix' => 50,
    //             'image' => 'produit3.jpg',
    //         ],
    //     ];

    // if (!$categorie) {
    //     throw $this->createNotFoundException('Catégorie non trouvée.');
    // }

    // return $this->render('accueil/index.html.twig', [
    //     'categorie' => $categorie,
	// 			'produits' => $produits,
    // ]);
    // }

        // Créer une liste de produits fictifs

    // #[Route('/', name: 'app_categories_index', methods: ['GET'])]
    // public function indexCategories(CategoriesRepository $categoriesRepository): Response
    // {
    //     return $this->render('admin/categories/index.html.twig', [
    //         'categories' => $categoriesRepository->findAll(),
    //     ]);
    // }
}