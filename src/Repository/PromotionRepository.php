<?php

namespace App\Repository;

use App\Entity\Promotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Promotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Promotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Promotion[]    findAll()
 * @method Promotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Promotion::class);
    }

    // /**
    //  * @return Promotion[] Returns an array of Promotion objects
    //  */
    public function triByType($type)
    {
        return $this->createQueryBuilder('p')
            ->where('p.type LIKE :type')
            ->setParameter('type', '%'.$type."%")
            ->getQuery()
            ->getResult()
        ;
    }


    public function triByIdCroissant(){
        $em = $this->getEntityManager();
        $query = $em->createQuery('select p from App\Entity\Promotion p ORDER BY p.id');
        return $query->getResult();
    }

    public function triByIdDecroissant(){
        $em = $this->getEntityManager();
        $query = $em->createQuery('select p from App\Entity\Promotion p ORDER BY p.id desc');
        return $query->getResult();
    }

    /*
    public function findOneByTpe($value): ?Promotion
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/

    /*public function statistics($type)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('select count(*) from App\Entity\Promotion p where p.type=')
    }*/
}
