<?php

namespace AnswersBundle\Entity;

/**
 * QARepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QARepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllOrderedById() {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT qa FROM AnswersBundle:QA qa ORDER BY qa.id ASC'
            )
            ->getResult();
    }
}