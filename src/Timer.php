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
     * Starts the timer.
     *
     * @access public
     * @return float
     */
    public function start()
    {
        return $this->time = microtime(true);
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
     * Return the elampsed time in specific format.
     *
     * @access public
     * @param  int    $decimals
     * @param  string $format
     * @return void
     */
    public function getTime($decimals = 2, $format = 'MILLISECOND')
    {
        if ($this->time > 0) {
            $endTime = microtime(true);
            $diff = ($endTime - $this->time);

            switch (strtoupper($format)) {
                case "MILLISECOND":
                    $result = $diff * 1000;
                    $suffix = "ms";
                    break;
                case "SECOND":
                default:
                    $result = $diff;
                    $suffic = "s";
                    break;
            }

            return number_format($result, $decimals) . $suffix;
        }

        return 0;
    }
}
