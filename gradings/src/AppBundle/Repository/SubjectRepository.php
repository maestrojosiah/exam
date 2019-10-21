<?php

namespace AppBundle\Repository;

/**
 * SubjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SubjectRepository extends \Doctrine\ORM\EntityRepository
{
    public function countSubjects($user)
    {
        return $this->createQueryBuilder('s')
            ->select('count(s.id)')
            ->where('s.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }

	public function getPreviousSubject($subjectId)
	{
	    return $this->createQueryBuilder('u')
	        ->select('u')

	        // Filter users.
	        ->where('u.id < :subjectId')
	        ->setParameter(':subjectId', $subjectId)

	        // Order by id.
	        ->orderBy('u.id', 'DESC')

	        // Get the first record.
	        ->setFirstResult(0)
	        ->setMaxResults(1)
            ->getQuery()
	        ->getOneOrNullResult()
	    ;

	}

	public function getNextSubject($subjectId)
	{
	    return $this->createQueryBuilder('u')
	        ->select('u')

	        ->where('u.id > :subjectId')
	        ->setParameter(':subjectId', $subjectId)

	        ->orderBy('u.id', 'ASC')

	        ->setFirstResult(0)
	        ->setMaxResults(1)
            ->getQuery()
	        ->getOneOrNullResult()
	    ;

	}	
    
}
