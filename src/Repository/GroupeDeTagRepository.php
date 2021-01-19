<?php

namespace App\Repository;

use App\Entity\GroupeDeTag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupeDeTag|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupeDeTag|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupeDeTag[]    findAll()
 * @method GroupeDeTag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupeDeTagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupeDeTag::class);
    }

    // /**
    //  * @return GroupeDeTag[] Returns an array of GroupeDeTag objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupeDeTag
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
