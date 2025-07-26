<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => $database_type,
    'unix_socket' => $database_sock,
    'database' => $database_name,
    'username' => $database_user,
    'password' => $database_pass,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
