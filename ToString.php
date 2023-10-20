<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value = 100;

$student = (string) $student1;
var_dump($student);

// bisa seperti ini juga
echo $student1 . PHP_EOL;