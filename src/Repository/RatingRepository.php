<?php

namespace App\Repository;

use App\Entity\Rating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rating|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rating|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rating[]    findAll()
 * @method Rating[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rating::class);
    }

    public function calculTotalRating($id)
    {
        $qb = $this->createQueryBuilder('r');
        $qb->select( 'sum(r.nbr_etoiles)' )
            ->where('r.club = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Club',
                'c',
                'WITH',
                'c.id = r.club'
            );
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function CalculNbrRating($id)
    {
        $qb = $this->createQueryBuilder('r');
        $qb->select( 'count(r.id)' )
            ->where('r.club = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Club',
                'c',
                'WITH',
                'c.id = r.club'
            );
        return $qb->getQuery()->getSingleScalarResult();
    }





    public function calculTotalRatings($id)
    {
        $qb = $this->createQueryBuilder('r');
        $qb->select( 'sum(r.nbr_etoiles)' )
            ->where('r.hebergement = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Hebergement',
                'c',
                'WITH',
                'c.id = r.hebergement'
            );
        return $qb->getQuery()->getSingleScalarResults();
    }

    public function CalculNbrRatings($id)
    {
        $qb = $this->createQueryBuilder('r');
        $qb->select( 'count(r.id)' )
            ->where('r.hebergement = :id')
            ->setParameter('id', $id)
            ->leftJoin(
                'App\Entity\Hebergement',
                'c',
                'WITH',
                'c.id = r.hebergement'
            );
        return $qb->getQuery()->getSingleScalarResults();
    }

}
