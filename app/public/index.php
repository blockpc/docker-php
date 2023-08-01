<?php

use App\Example\HelloWorld;

require_once dirname(__DIR__) . '/vendor/autoload.php';

// xdebug_info();

echo "hello world from docker.";

new HelloWorld();

?>