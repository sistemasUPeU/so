<?php

use Illuminate\Database\Capsule\Manager as Conexion;
//Crear Base de datos
$conexion = new Conexion;
$conexion->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'svinos',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$conexion->setAsGlobal();
$conexion->bootEloquent();