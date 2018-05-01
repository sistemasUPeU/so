<?php
  require '../vendor/autoload.php';
  require '../config/database.php';
  use Illuminate\Database\Capsule\Manager as Capsule;
  $clientesx = App\Entidades\cliente::get();


  include "../resources/vista/clientes/index.php";