<?php
// src/Service/SalesStatisticsService.php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class StatistiquesService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function ProduitsPlusVendus(int $limit = 10): array
    {
        $query = $this->em->createQuery('
            SELECT p.name, SUM(ci.quantity) AS totalQuantity
            FROM App\Entity\Produit p
            JOIN p.cartItems ci
            GROUP BY p.id
            ORDER BY totalQuantity DESC
        ')->setMaxResults($limit);

        return $query->getResult();
    }

    public function getSalesByMonth(): array
    {
        $query = $this->em->createQuery('
            SELECT DATE_FORMAT(o.createdAt, \'%Y-%m\') AS month, SUM(o.total) AS totalSales
            FROM App\Entity\Order o
            GROUP BY month
            ORDER BY month ASC
        ');

        return $query->getResult();
    }
}
