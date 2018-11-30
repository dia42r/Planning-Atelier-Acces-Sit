<?php
namespace PlanningBundle\Helper;

use DateInterval;
use DateTime;

/**
 * Description of PlanningDateHelper
 *
 * @author XQJM798
 */
class PlanningDateHelper 
{
    const OFF_HOUR = array('12','13','18', '19', '20', '21', '22', '23', '24', '00', '01', '02', '03', '04', '05', '06');
    
    
    /**
     * Verifie si la date de fin ou de debut la plannification tombe sur un weekend 
     * @param type $date
     * @return boolean
     */
    public static function isThisDayAWeekend($date) 
    {
        $timestamp = strtotime($date);
        $weekday = date("l", $timestamp);

        if ($weekday == "Saturday" OR $weekday == "Sunday") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * return le prochain jour de service 
     * @param DateTime2 $date
     * @return DateTime2
     */
    public static function getNextOfficeDay(DateTime $date) 
    {
        while (self::isThisDayAWeekend($date->format('Y-m-d H:i:s'))) {
            $date->add(new DateInterval('P1D'));
        }
        return $date;
    }
    
    
    /**
     * Verifie si l'horaire est un horaire de service
     * @param type $date
     * @return boolean
     */
    public static function isOfficeHour($date) 
    { 
        if (array_key_exists($date->format('H'), array_flip(self::OFF_HOUR))) {
            return false;   
        }
        return true;   
    }
    
    /**
     * 
     * @param DateTime $date
     * @return DateTime
     */    
    public static function getNextOfficeHour(DateTime $date) 
    {
        $h = $date->format('H');
        while(!self::isOfficeHour($date)) {

            $date->add(new DateInterval('PT1H'));
            $h = $date->format('H');
        }
        return $date;
    }
    
}
