<?php
   require '../vendor/autoload.php';
   require '../config/database.php';
  

   $employee = App\Entidades\empleado::get();
  

   include "../resources/vista/empleados/index.php";
