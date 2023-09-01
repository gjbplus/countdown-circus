<?php

use DI\Container;
use Carbon\Carbon;
use Slim\Factory\AppFactory;


// Create Container using PHP-DI
$container = new Container();

// Set container to create App with on AppFactory
AppFactory::setContainer($container);


$container->set('carbon', function(){
    return new Carbon();
});