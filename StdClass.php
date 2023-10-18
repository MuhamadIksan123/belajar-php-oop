<?php

$array = [
    "FirstName" => "Eko",
    "MiddleName" => "Kurniawan",
    "LastName" => "Khannedy"
];

$object = (object) $array;
var_dump($object);

echo "First Name : $object->FirstName" . PHP_EOL;
echo "Middle Name : $object->MiddleName" . PHP_EOL;
echo "Last Name : $object->LastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Eko", "Subang");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);