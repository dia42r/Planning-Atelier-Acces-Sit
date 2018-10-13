<?php

namespace PlanningBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SqlSrvBundle\Entity\Saledocumentline;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BatchController extends Controller
{
    /**
     * @Route("/batch-test", name="batchTest")
     * @param $name
     */
    public function indexAction()
    {
        $testplanning = $this
            ->get('doctrine.orm.default_entity_manager')
            ->getRepository(\PlanningBundle\Entity\EBP\SaleDocumentLine::class)
            ->findlastid();
        dump($testplanning['id']);
        $test = $this
            ->get('doctrine.orm.customer_entity_manager')
            ->getRepository(Saledocumentline::class)
            ->findtest($testplanning['id']);
        dump($test);
        die;
    }
}
