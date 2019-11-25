<?php

use Phalcon\Config;

return new Config(
    [
        'database' => [
            'adapter' => getenv('IDEA_DB_ADAPTER'),
            'host' => getenv('IDEA_DB_HOST'),
            'username' => getenv('IDEA_DB_USERNAME'),
            'password' => getenv('IDEA_DB_PASSWORD'),
            'dbname' => getenv('IDEA_DB_NAME'),
        ]
    ]
);
