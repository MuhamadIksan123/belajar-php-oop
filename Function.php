<?php

require_once 'data/Person.php';

$eko = new Person("Eko", "Budi");
$eko->name = "Eko";
$eko->sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$joko->info();
$eko->info();