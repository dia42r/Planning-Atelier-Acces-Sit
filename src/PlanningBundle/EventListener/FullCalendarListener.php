<?php

namespace PlanningBundle\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use PlanningBundle\Entity\Main\Planning;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Toiba\FullCalendarBundle\Entity\Event;
use Toiba\FullCalendarBundle\Event\CalendarEvent;

class FullCalendarListener
{
    /**
     * @var EntityManagerInterface
     */
    private $em;
    private $router;

    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $router)
    {
        $this->em = $em;
        $this->router = $router;
    }
    
    public function loadEvents(CalendarEvent $calendar)
    {
        $startDate = $calendar->getStart();
        $endDate = $calendar->getEnd();
        $filters = $calendar->getFilters();
        
        dump($filters);
        
        $plannings = $this->em->getRepository(Planning::class)->findAll();

        
        foreach ($plannings as $planning) {
            $title = $planning->getSaleDocumentLine()->getDocumentNumber() .' - '. $planning->getActor()->getName() .' - '. $planning->getDuration() .' Heure(s)';
            $calendar->addEvent(new Event(
                $title,    
                $planning->getStartDate(),
                $planning->getEndDate()
                    ));
            
        }
    }
    
}