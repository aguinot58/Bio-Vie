<?php

namespace App\Repository;

use App\Entity\Activites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Activites>
 *
 * @method Activites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activites[]    findAll()
 * @method Activites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activites::class);
    }

    public function add(Activites $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Activites $entity, bool $flush = false): void
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
     * @param integer $currentPage The current page (passed from controller)
     *
     * @return \Doctrine\ORM\Tools\Pagination\Paginator
     */
    public function getAllActivites($query, $currentPage, $limit)
    {
        
        // No need to manually get get the result ($query->getResult())
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





//    /**
//     * @return Activites[] Returns an array of Activites objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Activites
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
