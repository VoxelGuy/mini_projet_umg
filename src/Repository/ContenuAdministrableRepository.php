<?php

namespace App\Repository;

use App\Entity\ContenuAdministrable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContenuAdministrable>
 *
 * @method ContenuAdministrable|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContenuAdministrable|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContenuAdministrable[]    findAll()
 * @method ContenuAdministrable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContenuAdministrableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContenuAdministrable::class);
    }

    public function save(ContenuAdministrable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ContenuAdministrable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ContenuAdministrable[] Returns an array of ContenuAdministrable objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ContenuAdministrable
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
