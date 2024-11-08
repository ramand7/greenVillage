<?php

namespace App\DataFixtures;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;

class ProduitFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger){}
    
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
				
				for($prod = 1; $prod <= 20; $prod++){
        
				$produit = new Produit();

				$produit->setLibelle($faker->text(8));
				$produit->setDescription($faker->text(255));
				$produit->setPrixht($faker->numberBetween(60, 3000));
				$produit->setTva($faker->numberBetween(0.18, 0.20));
				$produit->setStock($faker->numberBetween(0, 20));
				$produit->setPhoto($faker->text(10));
				$produit->setLibelle($faker->text(15));
				
				// On va chercher une référence de catégorie
				
				$category = $this->getReference('cat-'.rand(1, 15));
				$produit->setCategorie($category);
				
				$manager->persist($produit);								
				}		        

        $manager->flush();
    }
}
