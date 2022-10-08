<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class Test
{
    public function twig(): void
    {
        $loader = new FilesystemLoader('../../../twig/views/user/');

        $twig = new Environment($loader, array(
            'debug' => true,
        ));

        $twig->addExtension(new DebugExtension()); // {{ dump(array|object) }}

        echo $twig->render('index.php', array(
            'name' => 'alex',
            'age' => 25,
            'users' => array(
                array('name' => 'joe', 'age' => 24, 'sex' => 'male'),
                array('name' => 'jim', 'age' => 18, 'sex' => 'male'),
                array('name' => 'lisa', 'age' => 26, 'sex' => 'female')
            )
        ));
    }
}
