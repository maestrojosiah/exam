<?php

namespace AppBundle\Repository;

/**
 * ExamCompanyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ExamCompanyRepository extends \Doctrine\ORM\EntityRepository
{
    public function countExams($user)
    {
        return $this->createQueryBuilder('s')
            ->select('count(s.id)')
            ->where('s.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getScalarResult();
    }
}