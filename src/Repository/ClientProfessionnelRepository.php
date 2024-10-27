<?php

namespace App\Repository;

use App\Entity\Client\ClientProfessionnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClientProfessionnel>
 *
 * @method ClientProfessionnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientProfessionnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientProfessionnel[]    findAll()
 * @method ClientProfessionnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientProfessionnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientProfessionnel::class);
    }

//    /**
//     * @return ClientProfessionnel[] Returns an array of ClientProfessionnel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClientProfessionnel
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
