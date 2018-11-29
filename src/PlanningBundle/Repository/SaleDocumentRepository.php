<?php

namespace PlanningBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SaleDocumentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SaleDocumentRepository extends EntityRepository
{
    
    public function findByDocumentNumber($sale_document_id) 
    {
        $q = $this->createQueryBuilder("p")
             ->where("p.documentNumber = :sale_document_id")
             ->setParameter(':sale_document_id', $sale_document_id)
             ->getQuery();
        
        
        return $q->getSingleResult();
    }
    
    
    
    /**
     * 
     * @param type $param
     * @return type
     */
    public function findScheduledOrder() {
        $q = $this->createQueryBuilder("s")
                ->orderBy('s.documentDate', 'DESC')
                ->where('s.status != :status')
                ->setParameter(':status', 'NON_PLANIFIE')
                ->getQuery();
        
        return $q->getResult();
    }
    

    /**
     * 
     * @param type $param
     * @return type
     */
    public function findNotScheduledOrder() {
        $q = $this->createQueryBuilder("s")
                ->orderBy('s.documentDate', 'DESC')
                ->where('s.status = :status')
                ->setParameter(':status', 'NON_PLANIFIE')
                ->getQuery();
        
        return $q->getResult();
    }
    
    
    public function findlastid()
    {
        $d = $this->createQueryBuilder('s')
            ->select('s.id')
            ->orderBy('s.id', 'DESC')
            ->setFirstResult(1)
            ->setMaxResults(1)
            ->getQuery();
        return $d->getSingleResult();
    }


    
    public function findLastImportDate()
    {
        $q = $this->createQueryBuilder("s") 
        ->select("s.lastImportDate")
        ->orderBy('s.lastImportDate', 'DESC')
        ->setMaxResults(1) 
        ->getQuery();

        return $q->getSingleScalarResult();
    }
}
