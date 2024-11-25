<?php

namespace App\Repository;

use App\Entity\Categories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categories>
 *
 * @method Categories|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categories|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categories[]    findAll()
 * @method Categories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categories::class);
    }

    /**
     * Récupère toutes les catégories principales avec leurs sous-catégories.
     */
    // public function findAllWithChildren(): array
    // {
    //     return $this->createQueryBuilder('c')
    //         ->leftJoin('c.categories', 'children') // Charger les enfants
    //         ->addSelect('children')               // Inclure dans le SELECT
    //         ->where('c.parent IS NULL')           // Catégories principales
    //         ->getQuery()
    //         ->getResult();
    // }

		public function findCategoriesWithSubcategories(): array
		{
				$query = $this->createQueryBuilder('c')
						->leftJoin('c.categories', 'subcategories') // Charger les sous-catégories
						->addSelect('subcategories')               // Inclure les sous-catégories dans le SELECT
						->where('c.parent IS NULL')                // Récupérer seulement les catégories principales
						->getQuery();

				return $query->getResult();
		}

}
