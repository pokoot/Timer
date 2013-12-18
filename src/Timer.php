<?php

namespace Goldfinger;

class Timer
{
    private $time;

    public function getCurrentTime()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    public function start()
    {
        return $this->time = $this->getCurrentTime();
    }

    public function stop()
    {
        $this->time = 0;
    }


    public function getTime($decimal = 4)
    {
        if ( $this->time > 0 ) {
            $endTime = $this->getCurrentTime();
            return number_format(bcsub($endTime, $this->time ,4), $decimal);
        }
        return number_format(0, $decimal);
    }

}
