<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Categories;
use App\Form\ProduitType;
use App\Form\CategoriesType;
use App\Repository\ProduitRepository;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/souscategories')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'sous_categories')]
    public function indexProd(): Response
    {
        return $this->render('souscategories/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

		// Pour l'affichage des catégories de  produits

	#[Route('/guitares', name: 'guitares', methods: ['GET'])]
    public function indexGuit(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/guitares/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }

		#[Route('/claviers', name: 'claviers', methods: ['GET'])]
    public function indexClav(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/claviers/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }
    
		#[Route('/saxophones', name: 'saxophones', methods: ['GET'])]
    public function indexSax(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/saxophones/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }
		
		#[Route('/logiciels', name: 'logiciels', methods: ['GET'])]
    public function indexLog(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/logiciels/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }

		#[Route('/batteries', name: 'batteries', methods: ['GET'])]
    public function indexBat(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/batteries/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }

		#[Route('/accessoires', name: 'accessoires', methods: ['GET'])]
    public function indexSono(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/accessoires/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }

		#[Route('/sonorisation', name: 'sonorisation', methods: ['GET'])]
    public function indexAccès(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/sonorisation/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }

		#[Route('/librairie', name: 'librairie', methods: ['GET'])]
    public function indexLib(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('souscategories/librairie/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
         ]);
    }

	#[Route('/guitares/{id}', name: 'guit_classiques', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showGuitClass(int $id, CategoriesRepository $categoriesRepository): Response
    {
        $guitare = $categoriesRepository->find($id);

        if (!$guitare) {
        throw $this->createNotFoundException('Produit non trouvé.');
        }

        return $this->render('souscategories/guitares/_classiques.html.twig', [
        'categories' => $guitare,
        ]);
     }

}