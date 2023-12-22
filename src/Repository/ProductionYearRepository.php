<?php

namespace App\Repository;

use App\Entity\ProductionYear;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductionYear>
 *
 * @method ProductionYear|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionYear|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionYear[]    findAll()
 * @method ProductionYear[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionYearRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductionYear::class);
    }

//    /**
//     * @return ProductionYear[] Returns an array of ProductionYear objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductionYear
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
