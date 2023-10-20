<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

ValidationUtill::validateReflection($request);

// ValidationUtill::validate($request);

class RegisterRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterRequest();
$register->name = "eko";
$register->address = "Subang";
$register->email = "eko@gmail.com";

ValidationUtill::validateReflection($register);