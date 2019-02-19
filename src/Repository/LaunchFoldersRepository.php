<?php

namespace App\Repository;

use App\Entity\LaunchFolders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LaunchFolders|null find($id, $lockMode = null, $lockVersion = null)
 * @method LaunchFolders|null findOneBy(array $criteria, array $orderBy = null)
 * @method LaunchFolders[]    findAll()
 * @method LaunchFolders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LaunchFoldersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LaunchFolders::class);
    }

    // /**
    //  * @return LaunchFolders[] Returns an array of LaunchFolders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LaunchFolders
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
