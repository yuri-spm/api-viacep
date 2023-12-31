<?php

require './vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('templates\pages');
$twig = new Twig\Environment($loader, [
    'cache' => "templates\cache",
    'cache' => false,
    
]);



echo $template = $twig->render('home.html.twig');


