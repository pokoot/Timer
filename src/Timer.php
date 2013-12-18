<?php

namespace Goldfinger;

/**
 * A utility class that computes the elapsed time.
 *
 * @package
 * @version $id$
 * @author Harold Kim
 * @license http://pokoot.com/license.txt
 */
class Timer
{
    /**
     * Current time value storage.
     *
     * @var mixed
     * @access private
     */
    private $time;

    /**
     * Return the current microtime.
     *
     * @access public
     * @return float
     */
    public function getCurrentTime()
    {
        list($usec, $sec) = explode(" ", microtime());

        return ((float) $usec + (float) $sec);
    }

    /**
     * Starts the timer.
     *
     * @access public
     * @return float
     */
    public function start()
    {
        return $this->time = $this->getCurrentTime();
    }

    /**
     * Stop and resets the timer to zero.
     *
     * @access public
     * @return void
     */
    public function stop()
    {
        $this->time = 0;
    }

    /**
     * Returns the elapsed time
     *
     * @access public
     * @param  int   $decimal
     * @return float
     */
    public function getTime($decimal = 4)
    {
        if ($this->time > 0) {

            $endTime = $this->getCurrentTime();

            return number_format(bcsub($endTime, $this->time, 4), $decimal);
        }

        return number_format(0, $decimal);
    }
}
