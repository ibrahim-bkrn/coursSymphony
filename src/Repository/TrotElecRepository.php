<?php

namespace App\Repository;

use App\Entity\TrotElec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrotElec>
 *
 * @method TrotElec|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrotElec|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrotElec[]    findAll()
 * @method TrotElec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrotElecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrotElec::class);
    }

//    /**
//     * @return TrotElec[] Returns an array of TrotElec objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TrotElec
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
