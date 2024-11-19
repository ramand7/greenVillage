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


#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function indexProd(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

		// Pour la gestion des produits

	#[Route('/produits', name: 'app_produit_index', methods: ['GET'])]
    public function indexProduit(ProduitRepository $produitRepository): Response
    {
        return $this->render('admin/produits/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    #[Route('/produits/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function newProd(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/produits/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/produits/{id}', name: 'app_produit_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(int $id, ProduitRepository $produitRepository): Response
    {
    $produit = $produitRepository->find($id);

    if (!$produit) {
        throw $this->createNotFoundException('Produit non trouvé.');
    }

        return $this->render('admin/produits/show.html.twig', [
        'produit' => $produit,
        ]);
    }

    #[Route('/produits/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function editProd(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/produits/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('produits/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function deleteProd(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }

    // Pour la gestion CRUD des catégories de produit

    #[Route('/categories', name: 'app_categories_index', methods: ['GET'])]
    
		public function indexCat(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('admin/categories/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
        ]);
    }

    #[Route('/categories/new', name: 'app_categories_new', methods: ['GET', 'POST'])]
    public function newCat(Request $request, EntityManagerInterface $entityManager): Response
    {
        $category = new Categories();
        $form = $this->createForm(CategoriesType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/categories/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/categories/{id}', name: 'app_categories_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showCat(int $id, CategoriesRepository $categoriesRepository): Response
    {   
    $categorie = $categoriesRepository->find($id);
    // dd($categorie);

    if (!$categorie) {
        throw $this->createNotFoundException('Catégorie non trouvée.');
    }

    return $this->render('admin/categories/show.html.twig', [
        'categorie' => $categorie,
    ]);
    }


    #[Route('/categories/{slug}', name: 'categories_show_by_slug')]
    public function showBySlug(string $slug, CategoriesRepository $categoriesRepository): Response
    {
        $categorie = $categoriesRepository->findOneBy(['slug' => $slug]);

        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie non trouvée.');
        }

        return $this->render('admin/categories/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }
    
    #[Route('/{id}/edit', name: 'app_categories_edit', methods: ['GET', 'POST'])]
    public function editCat(Request $request, Categories $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoriesType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/categories/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categories_delete', methods: ['POST'])]
    public function deleteCat(Request $request, Categories $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
    }


}
