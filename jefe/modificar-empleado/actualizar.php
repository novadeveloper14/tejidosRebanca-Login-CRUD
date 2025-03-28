<?php

include("../../conexion/db.php");

$idEmpleado1=$_GET['id'];

$sql="SELECT * FROM empleados WHERE idEmpleado='$idEmpleado1'";
$query=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($query);

$idEmpleado = $_POST['idEmpleado'];
$fotoPerfil = $row['fotoPerfil'];
$rol1 = $row['rol'];
$nombreUsuario = $_POST['nombreUsuario'];
$apellido = $_POST['apellido'];
$gmail = $_POST['gmail'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$documento = $_POST['documento'];
$biografia = $_POST['biografia'];
$rol = $_POST['rol'];
$contraseña = $_POST['contraseña'];
$imagen = $_FILES['fotoPerfil'];
$rutaImagen = $imagen["tmp_name"];
$nombreImagen = $imagen["name"];
$tipo = $imagen["type"];
$carpeta = "../ima/";

if ($tipo != 'image/png' && $tipo != 'image/jpg' && $tipo != 'image/JPG' &&$tipo != 'image/jpeg' &&$tipo != 'image/gif'&&$tipo != 'image/svg' && $nombreImagen == "") {
    $nombreImagen = $fotoPerfil;
}else {
    $src = $carpeta.$nombreImagen;
    move_uploaded_file($rutaImagen, $src);
}

if ($rol == 0) {
    $rol = $rol1;
}


$cantidad = strlen($contraseña);

if ($cantidad <= 3) {
    header('Location: ../index.php');

} else{
    $sql="UPDATE empleados SET  fotoPerfil='$nombreImagen',nombreUsuario='$nombreUsuario',apellido='$apellido',gmail='$gmail',fechaNacimiento = '$fechaNacimiento',documento='$documento',biografia='$biografia',rol='$rol',contraseña = '$contraseña' WHERE idEmpleado= '$idEmpleado'";
    $query=mysqli_query($conexion,$sql);  
}

if($query){
    Header("Location: ../index.php");
}
?>