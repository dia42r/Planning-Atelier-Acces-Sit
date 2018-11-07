<?php

namespace PlanningBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("v2")
 */
class CalendarController extends Controller
{
    
    
    /**
     * @Route("/calendar_data", name="global_calendar_data")
     */
    public function getGlobalCalendarData(Request $request) {
        
        $date = new \DateTime('NOW');
        $datas = array(
        'title' => 'Event 1',
        'start' => $date,
        'end'   =>  $date->modify('+ 3 hour')
        );
        return new Response(serialize($datas)); 
    }
    
    
    
    /**
     * @Route("/calendar", name="global_calendar")
     */
    public function calendar() 
    {
        return $this->render('pages/global_calendar.html.twig'); 
    }
    
    /**
     * @Route("/actorCalendar", name="actor_calendar")
     */
    public function actorCalendar() 
    {
        $actors = $this->getDoctrine()
        ->getRepository(\PlanningBundle\Entity\Main\Actor::class)
        ->findAll();
        return $this->render('pages/consulter-planning-par-acteurs.html.twig', [
            'actors' => $actors
        ]); 
    }
     
    /**
     * @Route("/load-planning", name="loadplanning")
     * @param Request $request
     * @return Response
     */
    public function loadplanning(Request $request)
    {
        $planning = $request->query->get('planning');
        $actor = $request->query->get('actor');
        $serializer = $this->container->get('jms_serializer');

        $em = $this->getDoctrine()->getManager();
        
        switch ($planning) {
            case 'CAT':
                $schedules_all = $em->getRepository(\PlanningBundle\Entity\Main\Planning::class)->findAll();

                $calendar_data = [];
                $calendar_datas = [];

                foreach ($schedules_all as $schedule ) {
                    $calendar_data['title'] = $schedule->getDocumentNumber() . ' - '. $schedule->getActor() . ' - '. $schedule->getDuration();
                    $calendar_data['start'] = $schedule->getStartingDate();
                    $calendar_data['end'] = $schedule->getEndDate();
                    
                    
                    array_push($calendar_datas, $calendar_data);
                }

                $data = $serializer->serialize($calendar_datas, 'json');
                return new Response($data);
                
            case 'ACTOR':
                $schedules_actor = $em->getRepository(\PlanningBundle\Entity\Main\Planning::class)->getByActor($actor);

                $schedules_actor_tabs = [];
                $schedules_actor_tab = [];

                foreach ($schedules_actor as $schedule_actor ) {
                    
                    $schedules_actor_tab['title'] = $schedule_actor->getSaleDocumentLine()->getDocumentNumber();
                    
                    $schedules_actor_tab['start'] = $schedule_actor->getStartDate();
                    $schedules_actor_tab['end'] = $schedule_actor->getEndDate();
                    $schedules_actor_tab['backgroundColor'] = 'red';
                    array_push($schedules_actor_tabs, $schedules_actor_tab);
                }

                $data = $serializer->serialize($schedules_actor_tabs, 'json');
                return new Response($data);
        }
        return new Response('good');
    }
}
