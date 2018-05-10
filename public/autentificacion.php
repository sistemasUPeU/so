<?php

require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$user = $_POST["nomuser"];
$pass = $_POST["pass"];

$conexion = new mysqli("localhost", "root", "", "svinos");

$proceso = $conexion->query("SELECT * FROM users WHERE nomuser='$user' AND clave='$pass' ");

if ($resultado = mysqli_fetch_array($proceso)) {

    $_SESSION['c_user'] = $user;
    $_SESSION['c_pass'] = $pass;
  

    if ($resultado['idrol'] == 1) {
        $_SESSION['c_rol'] = $resultado['idrol'];
        $_SESSION['c_nombre'] = $resultado['nomuser'];
        $_SESSION['c_idusuario'] = $resultado['idpersona'];
        
        header("location: main.php");

    } elseif ($resultado['idrol'] == 2) {
        $_SESSION['c_rol'] = $resultado['idrol'];
        $_SESSION['c_nombre'] = $resultado['nomuser'];
        $_SESSION['c_idusuario'] = $resultado['idpersona'];
  
        header("location: main.php");
    }
} else {
    print "</script><script>location.href='../public/index.php';</script>";
}
?>

