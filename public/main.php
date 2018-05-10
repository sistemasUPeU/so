
<?php
require '../vendor/autoload.php';
require '../config/database.php';
 //Date Library
use Carbon\Carbon;
 //ORM Queries
 //Don't Forget Add -5 To UTC, Because We are in Peru <3
 //WeAreTheChampions

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$rol = $_SESSION['c_rol'];
$idusuario = $_SESSION['c_idusuario'];

$totalventas = App\Entidades\salida::where('fecha','>=', Carbon::now(-5)->startOfDay())->sum('monto_favor');
$creditobyuser = App\Entidades\salida::where('idusuario','=',4)->sum('monto_deuda');
$totalcreditos = App\Entidades\salida::sum('monto_deuda');


$totalventasemana = App\Entidades\salida::where('fecha','>=', Carbon::now(-5)->startOfYear())->sum('monto_favor');
$totalventasmes = App\Entidades\salida::where('fecha','>=', Carbon::now(-5)->startOfMonth())->sum('monto_favor');
$test = Carbon::now(-5);
 //Don't Forget Include This
if($rol==1){
	include "../resources/vista/dashboard.php";
}else{
	include "../resources/vista/userdashboard.php";
}
