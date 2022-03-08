<?php

namespace App\Repository;

use App\Entity\Room;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Room|null find($id, $lockMode = null, $lockVersion = null)
 * @method Room|null findOneBy(array $criteria, array $orderBy = null)
 * @method Room[]    findAll()
 * @method Room[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Room::class);
    }


    public function findWithImages($id)
    {
        // select from club,image where c(club).cover = i(image).id
        $qb = $this->createQueryBuilder('t');
        $qb->select( 't.id,t.Number,t.Etage,t.NbLit,t.Price, t.Description, t.Emplacement, t.disponibilite, t.Type,c.id as Hebergement,i.file' )
            ->leftJoin(
                'App\Entity\Image',
                'i',
                'WITH',
                't.cover = i.id'
            )
            ->where('t.hebergement = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Hebergement',
                'c',
                'WITH',
                'c.id = t.hebergement'
            )
            ->addOrderBy('t.id', 'ASC');
        return $qb->getQuery()->getResult();
    }

    public function calculRoomsDispo($id)
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select( 'count(t.id)' )
            ->where('t.hebergement = :id')
            ->andWhere('t.disponibilite = 1')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Hebergement',
                'c',
                'WITH',
                'c.id = t.hebergement'
            );
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function CalculRoomsAll($id)
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select( 'count(t.id)' )
            ->where('t.hebergement = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Hebergement',
                'c',
                'WITH',
                'c.id = t.hebergement'
            );
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function setDisponibilite($id,$value)
    {
        return $this->createQueryBuilder('t')
            ->update()
            ->set('t.disponibilite', ':value')
            ->where('t.id = :id')
            ->setParameter('value', $value)
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleScalarResult();
    }


    // /**
    //  * @return Room[] Returns an array of Room objects
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
    public function findOneBySomeField($value): ?Room
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
