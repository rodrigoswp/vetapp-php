<?php  
// Database configuration
$settings = array(
    'driver'    => 'pgsql',
    'host'      => 'localhost',
    'database'  => 'vet',
    'username'  => 'postgres',
    'password'  => '123456',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
);

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection( $settings );
$capsule->bootEloquent();