<?php


namespace PlanningBundle\Service;


class Time
{
    public function second($hour, $minutes) {

        $hour = intval($hour);
        $minutes = intval($minutes);
        return $seconde = ($hour * 3600)+($minutes * 60);
    }

    public function temp($second) {

        $seconds = intval($second); // don't forget the second param
        $hours   = floor($seconds / 3600);
        $minutes = floor(($seconds - ($hours * 3600)) / 60);
        $multiple = 0;

        $timesup24 = $hours > 23 ? true : false;
        $multiple = 2;
        $multiplier = 1;
        while($timesup24){
            $hours = floor($hours / $multiple);
            if($hours > 23){
                $multiplier++;
            }else{
                $time['multiplier'] = $multiplier;
                break;
            }

        }
        $hours = $hours < 10 ? "0" . ($hours) : $hours;
        if ($minutes < 10) {$minutes = "0".$minutes;}
        $time['time']    = $hours.':'.$minutes;
        return $time;
    }

}