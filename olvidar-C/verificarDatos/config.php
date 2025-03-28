<?php

$servidor = "localhost";
$usuario  = "id17257053_root";
$basededatos = "id17257053_tejidosrebanca";
$password = "Johan52112680-";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");


?>

