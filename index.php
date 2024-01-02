<?php

require './vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('templates\pages');
$twig = new Twig\Environment($loader, [
    'cache' => "templates\cache",
    'cache' => false,
    
]);
$twig->addExtension(new Twig\Extension\DebugExtension());

echo $template = $twig->render('form.html.twig');




