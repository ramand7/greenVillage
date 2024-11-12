<?php

namespace App\Controller;

use App\Entity\User\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/profil', name: 'profil_')]
class ProfilController extends AbstractController
{
    private $userRepo;

    public function __construct(UtilisateurRepository $userRepo)
		{
        $this->userRepo = $userRepo;
    }
		#[Route('/', name: 'display')]
    public function index(): Response
    {
    //    $user = new Utilisateur();
				$user = $this->getUser(); // On s'assure qu'un utilisateur est connecté avant d'accéder à ses informations

				if(!$user instanceof Utilisateur){
						throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
				}
				
				$identifiant = $user->getUserIdentifier(); // s'il est connecté, on récupère son email (UserIdentifier)
				
				if($identifiant){
						
						$info = $this->userRepo->findOneBy(["email" => $identifiant]); // On vérifie qu'on a bien un utilisateur qui a ce mail dans la base de données
				
				// Créer un tableau des informations de l'utilisateur
				
				$userInfo = [
                'email' => $user->getUserIdentifier(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'roles' => $user->getRoles()
            ];
				
				}

				return $this->render('profil/display.html.twig', [
            'userInfo' => $userInfo,
        ]);
    }

		    // Pour la mise à jour des rôles 

    #[Route('/', name: 'update')]

		public function updateRoles(Request $request): Response
		
		{
			$user = $this->getUser();

        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $identifiant1 = $user->getUserIdentifier(); // s'il est connecté, on récupère son email (UserIdentifier)
			
			$info = $this->userRepo->findOneBy(["email" => $identifiant1()]);

    	if ($request->isMethod('POST')) {
        $roles = $request->request->get('roles', []);
        $info->setRoles($roles[]);
        $this->userRepo->save($info, true);

        $this->addFlash('success', 'Rôles mis à jour avec succès !');
        
        return $this->redirectToRoute('app_profil');
    	}

    	return $this->render('profil/update.html.twig', [
        	'informations' => $info,
    	]);
		}

}
