<?php

namespace PlanningBundle\Event;

use PlanningBundle\Entity\EBP\SaleDocumentLine;
use Symfony\Component\EventDispatcher\Event;
use PlanningBundle\Manager\PlanningManager;

/**
 * Description of SaleDocumentLinePlannedEvent
 *
 * @author XQJM798
 */
class SaleDocumentLinePlannedEvent extends Event {
    
    const PLANNED = 'sale_document_line.planned';
    const STATUS = 'sale_document_line.status';
    const DELETED = 'sale_document_line.plannification.deleted';

    protected $saleDocumentLine;
    protected $planningManager;
    protected $status;

    public function __construct(SaleDocumentLine $saleDocumentLine, PlanningManager $planningManager = null, $status = null)
    {
        $this->saleDocumentLine = $saleDocumentLine;
        $this->planningManager  = $planningManager;
        $this->status = $status;
    }

    /**
     * 
     * @return type
     */
    public function getSaleDocumentLine()
    {
        return $this->saleDocumentLine;
    }
    
    /**
     * 
     * @return type
     */
    public function getStatus() 
    {
        return $this->status;
    }
    
    /**
     * 
     * @return type
     */
    public function getPlanningManager() 
    {
        return $this->planningManager;
    }
}
