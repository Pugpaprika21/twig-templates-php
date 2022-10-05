<?php

use Twig\Environment;
use Twig\Lexer;
use Twig\Loader\FilesystemLoader;

require_once('../twig/vendor/autoload.php');

$loader = new FilesystemLoader('../twig/views/');

$twig = new Environment($loader, array(
    'cache' => '/path/to/compilation_cache',
));

$lexer = new Lexer($twig, array(
    'tag_block' => ['{', '}'],
    'tag_variable' => ['{{ $', '}}']
));

echo $twig->render('index.html', array(
    'users' => array(
        array('name' => 'alex', 'age' => 25, 'sex' => 'male'),
        array('name' => 'joe', 'age' => 18, 'sex' => 'male'),
        array('name' => 'lisa', 'age' => 22, 'sex' => 'female')
    )
));
