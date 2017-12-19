<?php

namespace PlanningBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    private static $server = 'SRV-APPS\EBP';
    private static $user = 'sa';
    private static $password = '@ebp78EBP';
    private static $dbname = 'E.D.S_0895452f-b7c1-4c00-a316-c6a6d0ea4bf4';

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
//        $server = 'SRV-APPS\EBP';
//        $user = 'sa';
//        $password = '@ebp78EBP';
//        $dbname ='E.D.S_0895452f-b7c1-4c00-a316-c6a6d0ea4bf4';

//        $link = mssql_connect($server,'sa', 'ebp78EBP');
        $connectionInfo = [self::$dbname, self::$user , self::$password];
        $link = sqlsrv_connect(self::$server, $connectionInfo);

        if($link === false)
        {
            die(print_r(sqlsrv_errors(), true));
        }
//        dump($link);
//        die;
        return $this->render('pages/planifier-une-commande.html.twig');
    }

    /**
     * @Route("/consultation", name="consultation-planning")
     */
    public function consultationAction()
    {
        return $this->render('pages/consulter-le-planning.html.twig');
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
