<?php

$dateTime = new DateTime();
$dateTime->setDate(1999, 1, 20);
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone('America/Toronto'));
var_dump($now);

$string = $now->format("Y:i:d H:m:s");
echo "Waktu saat ini : $string";

$date = DateTime::createFromFormat("Y:i:d H:m:s", "2020:10:20 10:10:10", new DateTimeZone('Asia/Jakarta'));
var_dump($date);