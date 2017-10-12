<?php namespace Util;
/**
 * Created by PhpStorm.
 * User: Simon_2
 * Date: 10-Oct-17
 * Time: 18:33
 */

class Date
{
    public $day;
    public $month;
    public $year;

    function __construct()
    {
        try
        {
            print $this->day . "/" . $this->month . "/" . $this->year;
        }
        catch (DateException $dateException)
        {
            throw new DateException("$dateException->getMessage()",0, $dateException);
        }
    }

    function setYearOnly($dm)
    {
        $dm = $this->day . "/" . $this->month;
        print $dm . "/" . $this->year;
    }

    function printFullYear($day, $month, $year)
    {
        $day = $this->day;
        $month = $this->month;
        $year = $this->year;
        print $day . "/" . $month . "/" . $year;
    }
/* Error
    function printMonth()
    {
        private static $MONTHS = array( 1 => "jan", 2 => "feb", 3 => "mar", 4 => "apr", 5 => "may", 6 => "jun", 7 => "jul", 8 => "aug", 9 => "sep", 10 => "oct", 11 => "nov", 12 => "dec");
        print $this->day . "/" . $MONTHS[$this->month]. "/" . $this->year;
    }
*/
}