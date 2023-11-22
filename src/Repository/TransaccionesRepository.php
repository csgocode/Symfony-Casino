<?php
// src/Repository/TransaccionesRepository.php
namespace App\Repository;

use App\Entity\Transacciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TransaccionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transacciones::class);
    }

    public function findByUser($userId)
    {
        return $this->createQueryBuilder('t')
                    ->andWhere('t.userid = :userId')
                    ->setParameter('userId', $userId)
                    ->getQuery()
                    ->getResult();
    }
}
