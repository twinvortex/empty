<?php

$data = [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'empty_db',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
];

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

// Connect
$capsule->addConnection($data);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
