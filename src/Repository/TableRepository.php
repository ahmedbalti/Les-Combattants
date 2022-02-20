<?php

namespace App\Repository;

use App\Entity\Table;
use App\Entity\Club;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Table|null find($id, $lockMode = null, $lockVersion = null)
 * @method Table|null findOneBy(array $criteria, array $orderBy = null)
 * @method Table[]    findAll()
 * @method Table[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Table::class);
    }

    public function findWithImages($id)
    {
        // select from club,image where c(club).cover = i(image).id
        $qb = $this->createQueryBuilder('t');
        $qb->select( 't.id,t.numero,t.position,t.forme,t.disponibilite,t.type,c.id as club,i.file' )
            ->leftJoin(
                'App\Entity\Image',
                'i',
                'WITH',
                't.cover = i.id'
            )
            ->where('t.club = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Club',
                'c',
                'WITH',
                'c.id = t.club'
            )
            ->addOrderBy('t.id', 'ASC');
        return $qb->getQuery()->getResult();
    }
    // /**
    //  * @return Table[] Returns an array of Table objects
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
    public function findOneBySomeField($value): ?Table
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
