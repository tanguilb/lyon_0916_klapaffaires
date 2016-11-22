<?php

namespace KlapBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

/**
 * IntegrationVideoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IntegrationVideoRepository extends EntityRepository
{


    public function getThreeLastVideo()
    {
        $query = $this->createQueryBuilder('iv')
                        ->orderBy('iv.id', 'DESC')
                        ->setMaxResults(3)
                        ->getQuery();

        return $query->getResult();
    }





}
