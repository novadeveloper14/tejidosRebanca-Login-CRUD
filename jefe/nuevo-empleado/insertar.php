<?php
include("../../conexion/db.php");
$idEmpleado=$_GET['id'];

if (isset($_POST['nombreUsuario'])) {
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

    if ($tipo != 'image/png' && $tipo != 'image/jpg' && $tipo != 'image/JPG' &&$tipo != 'image/jpeg' &&$tipo != 'image/gif'&&$tipo != 'image/svg') {
        $nombreImagen = "desconocido.jpg";
    }else {
        $src = $carpeta.$nombreImagen;
        move_uploaded_file($rutaImagen, $src);
    }

    
    $cantidad = strlen($contraseña);
    
    if ($cantidad <= 3) {
    header('Location: index.php');

}else{

    $query = "INSERT INTO empleados(nombreUsuario, fotoPerfil, apellido, gmail, fechaNacimiento, documento, biografia, rol, contraseña) VALUES ('$nombreUsuario', '$nombreImagen', '$apellido', '$gmail', '$fechaNacimiento', '$documento', '$biografia', '$rol', '$contraseña')";
    $result = mysqli_query($conexion, $query);}

    if ($result) {
        header("location: ../index.php?id=$idEmpleado");
    }
}
?>
  
