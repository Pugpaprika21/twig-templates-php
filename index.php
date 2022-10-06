<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once('../twig/vendor/autoload.php');

$loader = new FilesystemLoader('../twig/views/');

$twig = new Environment($loader, array(
    'debug' => true, // {{ dump(array|object) }}
));

$twig->addExtension(new DebugExtension());

echo $twig->render('index_view.php', array(
    'name' => 'alex',
    'age' => 25,
    'users' => array(
        array('name' => 'joe', 'age' => 24, 'sex' => 'male'),
        array('name' => 'jim', 'age' => 18, 'sex' => 'male'),
        array('name' => 'lisa', 'age' => 26, 'sex' => 'female')
    )
));
