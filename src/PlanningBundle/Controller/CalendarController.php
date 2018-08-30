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
                    $planifTab['end'] = $planif->getEndDate();;
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
                    array_push($subTasksTab, $subTaskTab);
                }
//                dump($subTasksTab);
//                dump($subTasks[0]->getPlanif()->getSaleDocumentLine()->getSaleDocument()->getDocumentNumber());
//                dump($subTasks);
//                die;
                $data = $serializer->serialize($subTasksTab, 'json');
                return new Response($data);
                break;
            case 'TASK':
                $competence = $em->getRepository(Competence::class)->find($task);
                $subTasks = $em->getRepository(SousPlanification::class)->findTaskAllCompetenceBy($competence->getName());
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
//                dump($subTasksTab);
//                dump($subTasks[0]->getPlanif()->getSaleDocumentLine()->getSaleDocument()->getDocumentNumber());
//                dump($subTasks[0]->getActor()->toArray());
//                die;
                $data = $serializer->serialize($subTasksTab, 'json');
                return new Response($data);
                break;
            case 2:
                echo "i égal 2";
                break;
        }

//        dump($planifsTab);
//        die;

//        $tab = [
//            ['title' => "Event Title 1", "start"=> "2018-07-11T00:00:00", "end" => "2018-08-24T07:00:00"],
//            ['title' => "Event Title 2", "start"=> "2018-07-11T00:00:00", "end" => "2018-08-23T07:00:00"],
//            ['title' => "Event Title 3", "start"=> "2018-07-11T00:00:00", "end" => "2018-08-22T07:00:00"],
//            ['title' => "Event Title 4", "start"=> "2018-07-11T01:00:00", "end" => "2018-08-21T07:00:00"],
//            ['title' => "Event Title 5", "start"=> "2018-08-24T02:00:00", "end" => "2018-08-26T07:06:00"],
//        ];
//        $json = {"title":"Event Title 1","start":"2018-07-11T00:00:00"},{"title":"Event Title 2","start":"2018-07-10T00:00:00"},{"title":"Event Title 3","start":"2018-08-21T07:00:00","end":"2018-08-24T07:00:00"}]

        return new Response('good');

    }
}
