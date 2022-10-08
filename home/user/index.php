<?php

require('../../Controller/User/Test.php');
require_once('../../../Twig/vendor/autoload.php');

$test = new Test();
$test->twig();
