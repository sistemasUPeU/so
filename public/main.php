
<?php
 require '../vendor/autoload.php';
 require '../config/database.php';
 //Date Library
 use Carbon\Carbon;
 //ORM Queries
 //Don't Forget Add -5 To UTC, Because We are in Peru <3
 //WeAreTheChampions
 $totalventas = App\Entidades\salida::where('fecha','>=', Carbon::now(-5)->startOfDay())->sum('monto_favor');
 $totalcreditos = App\Entidades\salida::sum('monto_deuda');
 $totalventasemana = App\Entidades\salida::where('fecha','>=', Carbon::now(-5)->startOfYear())->sum('monto_favor');
 $totalventasmes = App\Entidades\salida::where('fecha','>=', Carbon::now(-5)->startOfMonth())->sum('monto_favor');
 $test = Carbon::now(-5);
 //Don't Forget Include This
 include "../resources/vista/dashboard.php";