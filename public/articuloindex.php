<?php 
require '../vendor/autoload.php';
require '../config/database.php';
use App\Entidades\producto as producto;
use App\Entidades\categoria;
use App\Entidades\medida;
use Illuminate\Database\Capsule\Manager as DB;
$cate = DB::table('categorias')->get();
$medida = DB::table('medidas')->get();


include "../resources/vista/articulos/index.php";

