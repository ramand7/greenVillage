<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produits')]
class ProduitController extends AbstractController
{
		// Afficher la liste de tous les produit
		
		#[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('admin/produits/list.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }
		// Pour la gestion des produits (CRUD)

    // Créer un nouveau produit

		#[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
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

    // Voir le détail d'un produit à l'aide de son id
		
		#[Route('/{id}', name: 'app_produit_show', requirements: ['id' => '\d+'], methods: ['GET'])]
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

    // Mettre à jour un produit
		
		#[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
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

    // Supprimer un produit
		
		#[Route('/{id}/delete', name: 'app_produit_delete', methods: ['POST'])]
    public function deleteProd(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
