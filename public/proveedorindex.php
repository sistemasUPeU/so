<?php
  require '../vendor/autoload.php';
  require '../config/database.php';


  $proveedora = App\Entidades\proveedor::get();
  include "../resources/vista/clientes/index.php";