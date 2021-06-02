<?php

require __DIR__."/composer.json";

$student = new \Source\Model\Student(
    "Yuri ",
    "Monte",
    "yuri.monte",
    "Rua"
);

var_dump($student);