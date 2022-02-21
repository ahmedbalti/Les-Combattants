<?php

namespace App\Repository;

use App\Entity\TypePromotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypePromotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypePromotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypePromotion[]    findAll()
 * @method TypePromotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypePromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypePromotion::class);
    }

    // /**
    //  * @return TypePromotion[] Returns an array of TypePromotion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypePromotion
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
