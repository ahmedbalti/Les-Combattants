<?php

namespace App\Repository;

use App\Entity\ReponseReclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReponseReclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReponseReclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReponseReclamation[]    findAll()
 * @method ReponseReclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReponseReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReponseReclamation::class);
    }
//    public function findEntitiesByString($str){
//        return $this->getEntityManager()
//            ->createQuery(
//                'SELECT p
//                FROM ReponseReclamation:Post p
//                WHERE p.title LIKE :str'
//            )
//            ->setParameter('str','%'.$str.'%')
//            ->getResult();
//    }

    // /**
    //  * @return ReponseReclamation[] Returns an array of ReponseReclamation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReponseReclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
