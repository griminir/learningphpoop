<?php
declare(strict_types=1);

$dateTime = new DateTime('12/10/2024 13:30');

echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('d-m-Y g:i A') . PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('d-m-Y g:i A') . PHP_EOL;

// links
// https://www.php.net/manual/en/book.datetime.php
// https://www.php.net/manual/en/function.strtotime.php
// https://www.php.net/manual/en/datetime.formats.php
// https://www.php.net/manual/en/dateinterval.format.php
// https://www.php.net/manual/en/dateinterval.construct.php
// https://www.php.net/manual/en/class.dateperiod.php

$randomDate = '15/05/2024 12:30';
$dateTime2 = DateTime::createFromFormat('d/m/Y g:i', $randomDate);
var_dump($dateTime2);