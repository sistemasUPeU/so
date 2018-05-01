<?php
  require '../vendor/autoload.php';
  require '../config/database.php';

  ob_start();
  $employee = App\Entidades\empleado::get();
  include "../resources/vista/empleados/index.php";

  $pdf = new Dompdf\Dompdf();
  $pdf->loadHtml(ob_get_clean());
  $pdf->render();
  $pdf->stream();

 