<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new Manager();
$vp->name = "Eko";
$vp->sayHello("Joko");