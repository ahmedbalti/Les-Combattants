<?php

namespace App\Repository;

use App\Entity\Reservation;
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
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function findWithImages()
    {
        $qb = $this->createQueryBuilder('r');
        $qb->select( 'r.id,r.date,r.heure,r.nbrPersonnes,r.name,t.id as table,i.file' )
            ->leftJoin(
                'App\Entity\Table',
                't',
                'WITH',
                't.id = r.tabl'
            )
            ->leftJoin(
                'App\Entity\Image',
                'i',
                'WITH',
                't.cover = i.id'
            )
            ->addOrderBy('r.id', 'ASC');
        return $qb->getQuery()->getResult();
    }

}
