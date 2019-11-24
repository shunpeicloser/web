<?php

$namespace = 'Idy\Idea\Controllers\Web';

$router->add('/',
    array(
        'namespace' => $namespace,
        'module' => 'idea',
        'controller' => 'idea',
        'action' => 'index',
    )

);
