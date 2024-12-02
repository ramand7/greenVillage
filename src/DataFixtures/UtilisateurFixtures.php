<?php

namespace App\DataFixtures;

use App\Entity\User\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;

class UtilisateurFixtures extends Fixture
{
    public function __construct(
				private UserPasswordHasherInterface $passwordEncoder,
				private SluggerInterface $slugger)
				{	}

    public function load(ObjectManager $manager): void
    {
        $admin = new Utilisateur();
				$admin->setEmail('admin@demo.fr');
				$admin->setNom('Gambier');
				$admin->setPrenom('Benoit');
				$admin->setPassword(
						$this->passwordEncoder->hashPassword($admin, 'admin')
				);
				
				$admin->setRoles(['ROLE_ADMIN']);

        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR'); // 'fr_FR' pour des codes postaux français
				
				for($usr = 1; $usr <= 3; $usr++){
        $user = new Utilisateur();
			
				$user->setEmail($faker->email);
				$user->setNom($faker->lastName);
				$user->setPrenom($faker->firstName);
				$user->setPassword(
						$this->passwordEncoder->hashPassword($user, 'secret')
				);
				// Ajout de rôles aléatoires
				$roles = $faker->randomElement([
                ['ROLE_USER'], 
                ['ROLE_ADMIN'], 
                ['ROLE_USER', 'ROLE_MANAGER']
        ]);
        $user->setRoles($roles);
				
				// Générer un code postal valide
        $zipcode = $faker->postcode; // Exemple : "75008" ou "59100"
        $user->setAdresse($faker->streetAddress); // Générer une adresse de rue
				$user->setVille($faker->city); // Générer une ville aléatoire
				$user->setCodePostal(substr($zipcode, 0, 5)); // Assurez-vous qu'il respecte la longueur
				
				$telephone = $faker->phoneNumber; // Exemple : "06 12 34 56 78"

    // Limitez la longueur du numéro à 15 caractères (ou votre limite)
				$telephone = substr($telephone, 0, 15);

				$user->setTelephone($telephone);
				$user->setTelephone($faker->phoneNumber());

				$manager->persist($user);								
				}				
				
				$manager->flush();
    }
}
