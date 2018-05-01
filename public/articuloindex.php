<?php 
require '../vendor/autoload.php';
require '../config/database.php';
use App\Entidades\producto as producto;



$articulos = producto::get();


include "../resources/vista/articulos/index.php";