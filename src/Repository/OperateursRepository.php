<?php

namespace App\Repository;

use App\Entity\Operateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Operateurs>
 *
 * @method Operateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Operateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Operateurs[]    findAll()
 * @method Operateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Operateurs::class);
    }

    public function add(Operateurs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Operateurs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     *
     * 1. Create & pass query to paginate method
     * 2. Paginate will return a `\Doctrine\ORM\Tools\Pagination\Paginator` object
     * 3. Return that object to the controller
     *
     * @param Doctrine\ORM\Query $query   DQL Query Object
     * @param integer            $currentPage  Current page (defaults to 1)
     * @param integer            $limit The total number per page (defaults to 5)
     *
     * @return \Doctrine\ORM\Tools\Pagination\Paginator
     */
    public function getAllOperateurs($query, $currentPage, $limit)
    {
        $paginator = $this->paginate($query, $currentPage, $limit);

        return $paginator;
    }

    /**
     * Paginator Helper
     *
     * Pass through a query object, current page & limit
     * the offset is calculated from the page and limit
     * returns an `Paginator` instance, which you can call the following on:
     *
     *     $paginator->getIterator()->count() # Total fetched (ie: `5` posts)
     *     $paginator->count() # Count of ALL posts (ie: `20` posts)
     *     $paginator->getIterator() # ArrayIterator
     *
     * @param Doctrine\ORM\Query $dql   DQL Query Object
     * @param integer            $page  Current page (defaults to 1)
     * @param integer            $limit The total number per page (defaults to 5)
     *
     * @return \Doctrine\ORM\Tools\Pagination\Paginator
     */
    public function paginate($dql, $page, $limit)
    {
        $paginator = new Paginator($dql);

        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }

    public function findOneBySomeField($value): ?Operateurs
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    






//    /**
//     * @return Operateurs[] Returns an array of Operateurs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

    
}
