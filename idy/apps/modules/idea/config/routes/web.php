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

$router->add('/idea/add',
    array(
        'namespace' => $namespace,
        'module' => 'idea',
        'controller' => 'idea',
        'action' => 'addForm',
    )
);

$router->addPost('/idea/add',
    array(
        'namespace' => $namespace,
        'module' => 'idea',
        'controller' => 'idea',
        'action' => 'addFormData',
    )
);

$router->add('/idea/rate',
    array(
        'namespace' => $namespace,
        'module' => 'idea',
        'controller' => 'idea',
        'action' => 'rateForm',
    )
);

$router->addPost('/idea/rate',
    array(
        'namespace' => $namespace,
        'module' => 'idea',
        'controller' => 'idea',
        'action' => 'rateData',
    )
);

$router->addPost('/idea/vote',
    array(
        'namespace' => $namespace,
        'module' => 'idea',
        'controller' => 'idea',
        'action' => 'vote',
    )
);