<?php

//Request Fields This is Pure PHP, Pure Action!
$puesto = $_POST["puesto"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

require '../vendor/autoload.php';
require '../config/database.php';
use App\Entidades\empleado as empleado;
use App\Entidades\persona as persona;

$persona = new persona;
$persona->nombre=$nombre;
$persona->apellido=$apellido;
$persona->dni=$dni;
$persona->telefono=$telefono;
$persona->direccion=$direccion;
$persona->save();

$empleado = new empleado;
$empleado->idpersona=$persona->idpersona;
$empleado->puesto=$puesto;
$empleado->save();

//List

echo "<script>location.href='../public/empleados.php';</script>";
