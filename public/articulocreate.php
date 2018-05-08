<?php
//CrearNuevoProducto
$idcategoria = $_POST["idcategoria"];
$idmedida = $_POST["idmedida"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];  
$stock_actual = $_POST["stock_actual"];
$precio = $_POST["preciov_actual"];
$descripcion = $_POST["descripcion"];


$producto = new producto;
$producto->idcategoria=$idcategoria;
$producto->idmedida=$idmedida; 
$producto->codigo=$codigo;
$producto->nombre=$nombre;
$producto->stock_actual=$stock_actual;
$producto->preciov_actual=$precio;
$descripcion->descripcion=$descripcion;
$producto->save(); 