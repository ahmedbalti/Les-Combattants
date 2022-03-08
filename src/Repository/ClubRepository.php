<?php

namespace App\Repository;

use App\Entity\Club;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Club|null find($id, $lockMode = null, $lockVersion = null)
 * @method Club|null findOneBy(array $criteria, array $orderBy = null)
 * @method Club[]    findAll()
 * @method Club[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClubRepository extends ServiceEntityRepository
{

    public function findWithImages($type)
    {
        // select from club,image where c(club).cover = i(image).id
        $qb = $this->createQueryBuilder('c');
        $qb->select( 'c.id,c.nom,c.lieu,c.description,c.disponibilite,i.file' )
            ->leftJoin(
                'App\Entity\Image',
                'i',
                'WITH',
                'c.cover = i.id'
            )
            ->where('c.type = :type')
            ->setParameter('type', $type)
            ->addOrderBy('c.id', 'ASC');
        return $qb->getQuery()->getResult();
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Club::class);
    }

    //fonction recherche : ne5dho string li ktebneh w nchoufouh mawjoud ou nn f liste des restos
    public function findByString($str,$type){
        $qb = $this->createQueryBuilder('c');
        $qb->select( 'c.id,c.nom,c.lieu,c.description,c.disponibilite,i.file' )
            ->where('c.nom LIKE :str')
            ->orWhere('c.lieu LIKE :str')
            ->orWhere('c.description LIKE :str')
            ->setParameter('str', '%'.$str.'%')
            ->leftJoin(
                'App\Entity\Image',
                'i',
                'WITH',
                'c.cover = i.id'
            )
            ->andWhere('c.type = :type')
            ->setParameter('type', $type)
            ->addOrderBy('c.id', 'ASC');
        return $qb->getQuery()->getResult();
    }



    // /**
    //  * @return Club[] Returns an array of Club objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Club
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
