<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoriesType;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// [CRUD Categories]
#[Route('/categories')]
class CategoriesController extends AbstractController
{
    #[Route('/', name: 'app_categories_index', methods: ['GET'])]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('admin/categories/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_categories_new', methods: ['GET', 'POST'])]
    public function newCat(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cat = new Categories(); // Créer une nouvelle instance
        $form = $this->createForm(CategoriesType::class, $cat); // Lier l'entité au formulaire        
				$form->handleRequest($request);  

        if ($form->isSubmitted() && $form->isValid()) {					
            $entityManager->persist($cat); 
            $entityManager->flush();

            return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
        }
// dd($form->getErrors(true, false));
        return $this->render('admin/categories/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categories_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(int $id, CategoriesRepository $categoriesRepository): Response
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


    #[Route('/{slug}', name: 'categories_show_by_slug')]
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

    #[Route('/{id}/delete', name: 'app_categories_delete', methods: ['POST'])]
    public function deleteCat(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
				// Rechercher la catégorie manuellement
				$categorie = $entityManager->getRepository(Categories::class)->find($id);
				// dd($categorie);

        if (!$categorie){
						throw $this->createNotFoundException('La catégorie n\'existe pas !');
				}
				if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
				// dd('About to delete', $categorie);
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categories_index', [], Response::HTTP_SEE_OTHER);
    }

}
