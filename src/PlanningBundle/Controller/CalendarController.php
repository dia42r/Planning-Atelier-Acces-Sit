<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Customer\SaleDocument;
use PlanningBundle\Entity\Main\Competence;
use PlanningBundle\Entity\Main\SousPlanification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalendarController extends Controller
{
    /**
     * @Route("/load-planning", name="loadplanning")
     * @param Request $request
     * @return Response
     */
    public function loadplanning(Request $request)
    {
        $planning = $request->query->get('planning');
        $actor = $request->query->get('actor');
        $task = $request->query->get('task');
        $serializer = $this->container->get('jms_serializer');

        $em = $this->getDoctrine()->getManager();

//        dump($planifs);
//        die;
        switch ($planning) {
            case 'CAT':
                $planifs = $em->getRepository(SaleDocument::class)->findSaleDocCPlanif();

                $planifsTab = [];

                foreach ($planifs as $planif ) {
                    $planifTab['title'] = $planif->getDocumentNumber();
                    $planifTab['start'] = $planif->getStartingDate();
                    $planifTab['end'] = $planif->getEndDate();
                    if($planif->getStatusBis() != null){

                    $planifTab['backgroundColor'] = 'red';
                    }
                    array_push($planifsTab, $planifTab);
//        dump($planif->getSaleDocumentLine()->getSaledocument()->getDocumentNumber());
                }

                $data = $serializer->serialize($planifsTab, 'json');
                return new Response($data);
                break;
            case 'ACTOR':
                $subTasks = $em->getRepository(SousPlanification::class)->findTaskAllActorBy($actor);

                $subTasksTab = [];

                foreach ($subTasks as $subTask ) {
                    $CAT = $subTask->getPlanif()->getSaleDocumentLine()->getSaleDocument()->getDocumentNumber();
                    $subTaskTab['title'] = $subTask->getCompetences().' 
                    | ['.$CAT.']';
                    $subTaskTab['start'] = $subTask->getStartingDate();
                    $subTaskTab['end'] = $subTask->getEndDate();
                    $subTaskTab['backgroundColor'] = 'red';
                    array_push($subTasksTab, $subTaskTab);
                }

                $data = $serializer->serialize($subTasksTab, 'json');
                return new Response($data);
                break;
            case 'TASK':
                $competence = $em->getRepository(Competence::class)->find($task);
                $subTasks = $em->getRepository(SousPlanification::class)
                    ->findTaskAllCompetenceBy($competence->getName());

                $subTasksTab = [];

                foreach ($subTasks as $subTask ) {
                    $actors = $subTask->getActor()->toArray();
                    $CAT = $subTask->getPlanif()->getSaleDocumentLine()->getSaleDocument()->getDocumentNumber();
                    $subTaskTab['title'] = '';
                    foreach ($actors as $actor ) {

                        $subTaskTab['title'] .= $actor->getName()."\n";
                    }

                    $subTaskTab['title'] .= '['.$CAT.']';
                    $subTaskTab['start'] = $subTask->getStartingDate();
                    $subTaskTab['end'] = $subTask->getEndDate();
                    array_push($subTasksTab, $subTaskTab);
                }

                $data = $serializer->serialize($subTasksTab, 'json');
                return new Response($data);
                break;
            case 2:
                echo "i égal 2";
                break;
        }
        return new Response('good');
    }
}
