<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main', methods: ['GET'])]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        // Récupérer les catégories principales et leurs sous-catégories
        $categories = $categoriesRepository->findCategoriesWithSubcategories();

        // Vérifier si tout est bien récupéré
        // dd($categories);

        return $this->render('main/index.html.twig', [
            'categories' => $categories,
            // dd($categories)
        ]);
        
    }
}       
        
        // Récupérer toutes les catégories principales (parent null)
				// $categories = $categoriesRepository->findBy(['parent' => null]);

        // // Récupérer les catégories principales avec leurs sous-catégories
        // $categories = $categoriesRepository->findAllWithChildren();

        // return $this->render('main/index.html.twig', [
        //     'categories' => $categories,
						// dd($categories)
        // ]);

