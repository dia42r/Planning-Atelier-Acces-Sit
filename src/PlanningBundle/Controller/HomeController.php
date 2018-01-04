<?php

namespace PlanningBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;;

use SqlSrvBundle\Entity\Saledocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="premiere-page")
     */
    public function indexAction()
    {
        return $this->render('pages/page-accueil.html.twig');
    }

    /**
     * @Route("/planification", name="planifier-une-commande")
     */
    public function planificationAction()
    {
        $commandes = $this->getDoctrine()->getRepository(SaleDocument::class,'customer')
            ->find('1913F07E-BBC1-490E-8162-000719EF6931');
//
        return $this->render('pages/planifier-une-commande.html.twig', [
//
            'commandes' => $commandes,

        ]);
    }

    /**
     * @Route("/consultation", name="consultation-planning")
     */
    public function consultationAction()
    {
        return $this->render('pages/consulter-le-planning.html.twig');
    }

    /**
     * @Route("/listes", name="listes-commandes")
     */
    public function listeCommandes()
    {

//        $serverName = "192.168.1.7\EBP"; //serverName\instanceName
//        $connectionInfo = ["Database"=>"E.D.S_0895452f-b7c1-4c00-a316-c6a6d0ea4bf4", "UID"=>"ben", "PWD"=>"363636"];
//        $conn = sqlsrv_connect( $serverName, $connectionInfo);
//
//
//        dump($conn);
//        die();
//        if( $conn ) {
//            dump("Connexion établie");
//        }else{
//            dump("ZBBEUL");
////            echo "La connexion n'a pu être établie.<br />";
//            die( print_r( sqlsrv_errors(), true));
//        }
//        die();


//        $commandes = $this->container->get('doctrine.orm.customer_entity_manager')->getRepository(Saledocument::class)
//            ->findSafeDoc();

        $commandes = $this->getDoctrine()->getRepository(Saledocument::class, 'customer')
            ->find('1913F07E-BBC1-490E-8162-000719EF6931');


//        dump($commandes);
//        die();
        return $this->render('pages/listes-des-commandes.html.twig', [

            'commandes' => $commandes,
        ]);
    }

    /**
     * @Route("/consultation-par-taches", name="consultation-taches")
     */
    public function consultationParTaches()
    {
        return $this->render('pages/consulter-planning-par-taches.html.twig');
    }

    /**
     * @Route("/consultation-par-acteurs", name="consultation-acteurs")
     */
    public function consultationParActeurs()
    {
        return $this->render('pages/consulter-planning-par-acteurs.html.twig');
    }
}
