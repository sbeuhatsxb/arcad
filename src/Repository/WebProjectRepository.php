<?php

namespace App\Repository;

use App\Entity\WebProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WebProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WebProject::class);
    }

    public function findAll()
    {
        return $this->findBy(array(), array('orderBy' => 'ASC'));
    }


    // /**
    //  * @return WebProject[] Returns an array of WebProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WebProject
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
