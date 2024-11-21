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

		// #[Route('/claviers', name: 'claviers', methods: ['GET'])]
    // public function indexClav(CategoriesRepository $categoriesRepository): Response
    // {
    //     return $this->render('souscategories/claviers/index.html.twig', [
    //         'categories' => $categoriesRepository->findAll(),
    //      ]);
    // }
		
		
		
		// #[Route('/produits/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    // public function newProd(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     $produit = new Produit();
    //     $form = $this->createForm(ProduitType::class, $produit);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->persist($produit);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('admin/produits/new.html.twig', [
    //         'produit' => $produit,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/produits/{id}', name: 'app_produit_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    // public function show(int $id, ProduitRepository $produitRepository): Response
    // {
    //     $produit = $produitRepository->find($id);

    //     if (!$produit) {
    //     throw $this->createNotFoundException('Produit non trouvé.');
    //     }

    //     return $this->render('admin/produits/show.html.twig', [
    //     'produit' => $produit,
    //     ]);
    // }

    // #[Route('/produits/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    // public function editProd(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    // {
    //     $form = $this->createForm(ProduitType::class, $produit);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('admin/produits/edit.html.twig', [
    //         'produit' => $produit,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('produits/{id}', name: 'app_produit_delete', methods: ['POST'])]
    // public function deleteProd(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
    //         $entityManager->remove($produit);
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    // }

    // Pour la gestion CRUD des catégories de produit

    // #[Route('/categories', name: 'app_categories_index', methods: ['GET'])]
	// public function indexCat(CategoriesRepository $categoriesRepository): Response
    // {
    //     return $this->render('admin/categories/index.html.twig', [
    //         'categories' => $categoriesRepository->findAll(),
    //     ]);
    // }

    // #[Route('/categories/new', name: 'app_categories_new', methods: ['GET', 'POST'])]
    // public function newCat(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     $category = new Categories();
    //     $form = $this->createForm(CategoriesType::class, $category);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->persist($category);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('admin/categories/new.html.twig', [
    //         'category' => $category,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/categories/{id}', name: 'app_categories_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    // public function showCat(int $id, CategoriesRepository $categoriesRepository): Response
    // {   
    // $categorie = $categoriesRepository->find($id);
    // // dd($categorie);

    // if (!$categorie) {
    //     throw $this->createNotFoundException('Catégorie non trouvée.');
    // }

    // return $this->render('admin/categories/show.html.twig', [
    //     'categorie' => $categorie,
    // ]);
    // }


    // #[Route('/categories/{slug}', name: 'categories_show_by_slug')]
    // public function showBySlug(string $slug, CategoriesRepository $categoriesRepository): Response
    // {
    //     $categorie = $categoriesRepository->findOneBy(['slug' => $slug]);

    //     if (!$categorie) {
    //         throw $this->createNotFoundException('Catégorie non trouvée.');
    //     }

    //     return $this->render('admin/categories/show.html.twig', [
    //         'categorie' => $categorie,
    //     ]);
    // }
    
    // #[Route('/{id}/edit', name: 'app_categories_edit', methods: ['GET', 'POST'])]
    // public function editCat(Request $request, Categories $categorie, EntityManagerInterface $entityManager): Response
    // {
    //     $form = $this->createForm(CategoriesType::class, $categorie);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('admin/categories/edit.html.twig', [
    //         'categorie' => $categorie,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/{id}', name: 'app_categories_delete', methods: ['POST'])]
    // public function deleteCat(Request $request, Categories $category, EntityManagerInterface $entityManager): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
    //         $entityManager->remove($category);
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
    // }


}