<?php

//Request Fields This is Pure PHP, Pure Action!
$rs = $_POST["rs"];
$ruc = $_POST["ruc"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

require '../vendor/autoload.php';
require '../config/database.php';
use App\Entidades\cliente as cliente;
use App\Entidades\persona as persona;

$persona = new persona;
$persona->nombre=$nombre;
$persona->apellido=$apellido;
$persona->dni=$dni;
$persona->telefono=$telefono;
$persona->direccion=$direccion;
$persona->save();

$cliente = new cliente;
$cliente->idpersona=$persona->idpersona;
$cliente->rs=$rs;
$cliente->ruc=$ruc;
$cliente->save();

echo "<script>location.href='../public/clienteindex.php';</script>";
