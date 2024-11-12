<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
				$form = $this->createForm(ContactFormType::class);
				
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
					//on crée une instance de Contact
					$message = new Contact();
					// Traitement des données du formulaire
					$data = $form->getData();
					//on stocke les données récupérées dans la variable $message
					$message = $data;

					$entityManager->persist($message);
					$entityManager->flush();

					//redirection vers la page d'accueil
					return $this->redirectToRoute('app_accueil');

				}

        return $this->render('contact/index.html.twig', [

            'form' => $form,
        ]);
    }
}
