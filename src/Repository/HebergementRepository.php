<?php

namespace App\Repository;

use App\Entity\Hebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hebergement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hebergement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hebergement[]    findAll()
 * @method Hebergement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HebergementRepository extends ServiceEntityRepository
{

    public function findWithImages($type)
    {
        // select from hotel,image where c(hotel).cover = i(image).id
        $qb = $this->createQueryBuilder('c');
        $qb->select( 'c.id, c.Name, c.NbStars, c.NbRooms,c.Address, c.Description, c.disponibilite, i.file' )
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
        parent::__construct($registry, Hebergement::class);
    }


    //fonction recherche : ne5dho string li ktebneh w nchoufouh mawjoud ou nn f liste des hotels
    public function findByString($str,$type){
        $qb = $this->createQueryBuilder('c');
        $qb->select( 'c.id, c.Name, c.NbStars, c.NbRooms,c.Address, c.Description, c.disponibilite, i.file' )
            ->where('c.Name LIKE :str')
            ->orWhere('c.NbStars LIKE :str')
            ->orWhere('c.NbRooms LIKE :str')
            ->orWhere('c.Address LIKE :str')
            ->orWhere('c.Description LIKE :str')
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
    //  * @return Hebergement[] Returns an array of Hebergement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hebergement
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
