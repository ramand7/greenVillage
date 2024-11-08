<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
		private $counter = 1;
		public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
			  $parent = $this->creationCategorie('Guitares', null, $manager);

				$this->creationCategorie('Guitares classiques', $parent, $manager);
				$this->creationCategorie('Guitares électriques', $parent, $manager);
				$this->creationCategorie('Guitares basses', $parent, $manager);
				$this->creationCategorie('Guitares électro acoustiques', $parent, $manager);

			  $parent = $this->creationCategorie('Claviers', null, $manager);

				$this->creationCategorie('Pianos', $parent, $manager);
				$this->creationCategorie('Claviers arrangeurs', $parent, $manager);
				$this->creationCategorie('Claviers maîtres', $parent, $manager);

			  $parent = $this->creationCategorie('Batteries', null, $manager);

				$this->creationCategorie('Batteries acoustiques', $parent, $manager);
				$this->creationCategorie('Batteries électroniques', $parent, $manager);

			  $parent = $this->creationCategorie('Saxophones', null, $manager);

				$this->creationCategorie('Saxophones alto', $parent, $manager);
				$this->creationCategorie('Saxophone tenor', $parent, $manager);
				
				$manager->flush();
    }

		public function creationCategorie(string $nom, Categories $parent = null, ObjectManager $manager)
		{
				$categorie = new Categories();
        $categorie->setNom($nom);
        $categorie->setSlug($this->slugger->slug($categorie->getNom())->lower());
				$categorie->setParent($parent);
        $manager->persist($categorie);

				$this->addReference('cat-'.$this->counter, $categorie);
				$this->counter++;
				
				return $categorie;
		}
}
