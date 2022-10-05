<?php

require_once('../twig/vendor/autoload.php');

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);

$twig = new \Twig\Environment($loader);

echo $twig->render('index2', ['name' => 'Fabien']);
