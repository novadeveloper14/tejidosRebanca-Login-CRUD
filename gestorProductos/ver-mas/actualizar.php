<?php

include("../../conexion/db.php");

$id1 = $_GET['id'];

$sql="SELECT * FROM añadir WHERE id='$id1'";
$query=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($query);


$img1 = $row['img'];
$estado2= $row['estado'];
$id = $_POST['id'];
$img = $_POST['img'];
$material = $_POST['material'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$estado=$_POST['estado'];
$estado1=$_POST['estado1'];
$imagen = $_FILES['img'];
$rutaImagen = $imagen["tmp_name"];
$nombreImagen = $imagen["name"];
$tipo = $imagen["type"];
$carpeta = "../ima/";

if ($tipo != 'image/png' && $tipo != 'image/jpg' && $tipo != 'image/JPG' &&$tipo != 'image/jpeg' &&$tipo != 'image/gif'&&$tipo != 'image/svg' && $nombreImagen == "") {
    $nombreImagen = $img1;
}else {
    $src = $carpeta.$nombreImagen;
    move_uploaded_file($rutaImagen, $src);
}

if ($estado == 2) {
    $estado = $estado2;
}



$sql="UPDATE añadir SET img='$nombreImagen',material='$material',descripcion='$descripcion',cantidad='$cantidad',estado = '$estado',estado1 = '$estado1' WHERE id='$id'";
    $query=mysqli_query($conexion,$sql);  

if($query){
    Header("Location: ../index.php");
}else{
    echo "error al actualizar";
}
?>