<?php


namespace PlanningBundle\Entity\Main;


use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use Doctrine\ORM\Mapping as ORM;


///**
// * Calend
// *
// * @ORM\Table(name="calendar_event")
// * @ORM\Entity(repositoryClass="PlanningBundle\Repository\CalendarEventRepository")
// */
class CalendarEvent extends FullCalendarEvent
{

//    /**
//     * @var int
//     *
//     * @ORM\Column(name="id", type="integer")
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    private $id;
//
//
//    /**
//     * Get id
//     *
//     * @return int
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
    /**
     * @return array
     */
    public function toArray()
    {

    }
}
