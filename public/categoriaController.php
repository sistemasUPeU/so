<?php
require '../vendor/autoload.php';
require '../config/database.php';
use App\Entidades\categoria as categoria;

$categoria = categoria::get();
echo json_encode($categoria);
 