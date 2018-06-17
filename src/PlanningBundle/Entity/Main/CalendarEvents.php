<?php


namespace PlanningBundle\Entity\Main;


use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;



class CalendarEvents extends FullCalendarEvent
{

    /**
     * @return array
     */
    public function toArray()
    {
        return ["title" => $this->title, "start" => $this->startDate->format("y-m-d"), "start" => $this->startDate->format("y-m-d")];
    }
}
