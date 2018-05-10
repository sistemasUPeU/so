<?php
  require '../vendor/autoload.php';
  require '../config/database.php';


  $pedido = App\Entidades\salida::get();
  include "../resources/vista/pedidos/index.php";