<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once('../twig/vendor/autoload.php');

$loader = new FilesystemLoader('../twig/views/');

$twig = new Environment($loader, [
    'cache' => '/path/to/compilation_cache',
]);

echo $twig->render('index.php', [
    'name' => 'Fabien',
    'age' => 24
]);
