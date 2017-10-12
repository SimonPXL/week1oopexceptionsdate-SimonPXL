<?php namespace Util;
use Throwable;

/**
 * Created by PhpStorm.
 * User: Simon_2
 * Date: 11-Oct-17
 * Time: 18:32
 */

class DateException extends \Exception
{
    public function __construct($message = "This is not a valid Date", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}