<?php

namespace SqlSrvBundle\Controller;

use SqlSrvBundle\Entity\Item;
use SqlSrvBundle\Entity\Saledocument;
use SqlSrvBundle\Entity\Saledocumentline;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/sql")
     */
    public function indexAction()
    {
        $test = $this->getDoctrine()->getRepository(Saledocument::class, 'customer')->findSafeDoc();
        $em = $this->container->get('doctrine.orm.default_entity_manager');


        $batchSize = 20;
        foreach ($test as $key => $safe ) {
//            dump($key);
//            dump($safe['id'],$safe['documentnumber'],$safe['documentdate'],$safe['deliverydate']);
//            die;
            $safedocument = new \PlanningBundle\Entity\Customer\SaleDocument();

            $safedocument->setId($safe['id']);
            $safedocument->setDocumentNumber($safe['documentnumber']);
            $safedocument->setDocumentDate($safe['documentdate']);
            $safedocument->setDocumentWishDate($safe['deliverydate']);

            $em->persist($safedocument);
            if (($key % $batchSize) === 0) {
                var_dump('ok');
//                var_dump($em);
                $em->flush();
                $em->clear(); // Detaches all objects from Doctrine!
            }
        }
        $em->flush();
        $em->clear();
        dump('end');
        die;
        return $this->render('SqlSrvBundle:Default:index.html.twig');
    }
    /**
     * @Route("/sql2")
     */
    public function index2Action()
    {

//
        $test = $this->getDoctrine()->getRepository(Saledocumentline::class, 'customer')->findDetails();
        $em = $this->container->get('doctrine.orm.default_entity_manager');
//        die("ok");


        $batchSize = 20;
        foreach ($test as $key => $safe ) {
//            dump($key);
//            dump($safe);
//            die;
            $safedocument = $em->getRepository(\PlanningBundle\Entity\Customer\SaleDocument::class)->find($safe['documentid']);
            if ($safe['itemid'] != null) {
                $item = $em->getRepository(\PlanningBundle\Entity\Customer\Item::class)->find($safe['itemid']);
            }
            else {
                $item = null;
            }

            $safedocumentline = new \PlanningBundle\Entity\Customer\SaleDocumentLine();


            $safedocumentline->setId($safe['id']);
            $safedocumentline->setSaleDocument($safedocument);
            $safedocumentline->setItem($item);
            $safedocumentline->setDescription($safe['description']);
            $safedocumentline->setQuantity($safe['quantity']);

            $em->persist($safedocumentline);
            if (($key % $batchSize) === 0) {
//                dump($safedocumentline);
                dump('ok');
//                die;
                $em->flush();
                $em->clear(); // Detaches all objects from Doctrine!
            }
        }
        $em->flush();
        $em->clear();
        dump('end');
        die;
        return $this->render('SqlSrvBundle:Default:index.html.twig');
    }


    /**
     * @Route("/sql1")
     */
    public function index1Action()
    {
//        die("ok");
        $items = $this->getDoctrine()->getRepository(Item::class,'customer')
            ->findItems();
        $em = $this->container->get('doctrine.orm.default_entity_manager');


        $batchSize = 20;
        foreach ($items as $key => $safe ) {
//            dump($key);
//            dump($safe['id'],$safe['caption']);
//            die;
            $item = new \PlanningBundle\Entity\Customer\Item();

            $item->setId($safe['id']);
            $item->setCaption($safe['caption']);
            $item->setDesComm($safe['descom']);

            $em->persist($item);
            if (($key % $batchSize) === 0) {
//                dump($item);
                dump('ok');
//                die;
                $em->flush();
                $em->clear(); // Detaches all objects from Doctrine!
            }
        }
        $em->flush();
        $em->clear();
        dump('end');
        die;
        return $this->render('SqlSrvBundle:Default:index.html.twig');
    }
}
