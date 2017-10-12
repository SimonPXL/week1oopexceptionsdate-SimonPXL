<?php namespace Util;

$datum = new Date();
$datum->day = $_POST["daytxt"];
$datum->month = $_POST["monthtxt"];
$datum->year = $_POST["yeartxt"];

if (checkdate($datum->month, $datum->day, $datum->year))
{
    $datum->printFullYear($datum->day, $datum->month, $datum->year);
}
else
{
    throw new \Exception("$datum is not a valid date.");
}
