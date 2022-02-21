<?php

namespace App\Repository;

use App\Entity\PromotionAffecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PromotionAffecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method PromotionAffecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method PromotionAffecte[]    findAll()
 * @method PromotionAffecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotionAffecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromotionAffecte::class);
    }

    // /**
    //  * @return PromotionAffecte[] Returns an array of PromotionAffecte objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PromotionAffecte
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
