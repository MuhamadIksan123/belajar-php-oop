<?php

class Zero {
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]); 
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument; $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with argument: $join" . PHP_EOL;
    }
}

$zero = new Zero();
// echo $zero->firstName . PHP_EOL;
// $zero->firstName = "Eko";
// isset($zero->firstName);
// unset($zero->firstName);

$zero->firstName = "Eko";
$zero->middleName = "Kurniawan";
$zero->lastName = "Khannedy";

echo "Fist Name: $zero->firstName" . PHP_EOL;
echo "Middle Name: $zero->middleName" . PHP_EOL;
echo "Last Name: $zero->lastName" . PHP_EOL;

$zero->sayHello("Eko", "Kurniawan");
Zero::sayHello("Eko", "Kurniawan");