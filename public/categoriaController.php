<?php
require '../vendor/autoload.php';
require '../config/database.php';
use App\Entidades\categoria as categoria;
use Illuminate\Database\Capsule\Manager as DB;
//Get The Values :D
$categoria= DB::table('categorias')->get()->toArray();
//Don't Forget Add This 
echo json_encode ($categoria);


 
