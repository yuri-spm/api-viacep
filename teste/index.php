<?php

require __DIR__ . "/../vendor/autoload.php";

$user = new \Source\Core\User(
    "Yuri",
    "Monte",
    "17439749065",
    "teste@gmail.com",
    "M"
);



$cep = validaCep("21230450");

$userAddress = new \Source\Core\Address(
    $cep->cep,
    $cep->logradouro,
    $cep->bairro,
    "Casa",
    69,
    $cep->localidade,
    $cep->uf
);


$register = new \Source\Model\Register(
    $user,
    $userAddress
);


var_dump($user, $userAddress, $register);




