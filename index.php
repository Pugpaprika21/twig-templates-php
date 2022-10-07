<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once('../twig/vendor/autoload.php');

class View
{
    #[FilesystemLoader, Environment]
    public function __construct(
        private FilesystemLoader $loader,
        private Environment $twig,
        private string $directory,
    ) {
        if (file_exists($this->directory)) {
            $this->loader = new FilesystemLoader($this->directory);
        }
    }

    #[Environment, DebugExtension]
    public function to(array $option_set = []): Environment
    {
        $twig = new Environment($this->loader, $option_set);
        $twig->addExtension(new DebugExtension());
        $this->twig = $twig;
        return $twig;
    }
    /**
     * @param string $render_path
     * @param array $array_obj
     * @return void
     */
    public function render(string $render_path, array $array_obj): void
    {
        echo $this->twig->render($render_path, $array_obj);
    }
}
























#[Environment, DebugExtension, FilesystemLoader]
function twig(): void
{
    $loader = new FilesystemLoader('../twig/views/');

    $twig = new Environment($loader, array(
        'debug' => true,
    ));

    $twig->addExtension(new DebugExtension()); // {{ dump(array|object) }}

    echo $twig->render('index_view.php', array(
        'name' => 'alex',
        'age' => 25,
        'users' => array(
            array('name' => 'joe', 'age' => 24, 'sex' => 'male'),
            array('name' => 'jim', 'age' => 18, 'sex' => 'male'),
            array('name' => 'lisa', 'age' => 26, 'sex' => 'female')
        )
    ));
}
