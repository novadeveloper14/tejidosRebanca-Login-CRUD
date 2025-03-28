<?php
include("../../conexion/db.php");
$id=$_GET['id'];

if (isset($_POST['material'])) {
    $img = $_POST['img'];
    $material = $_POST['material'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    $estado1 = $_POST['estado1'];
    $precio = $_POST['precio'];
    $precioT = $_POST['precioT'];
    $vendidos = $_POST['vendidos'];
    $imagen = $_FILES['img'];
    $rutaImagen = $imagen["tmp_name"];
    $nombreImagen = $imagen["name"];
    $tipo = $imagen["type"];
    $carpeta = "../ima/";

    if ($tipo != 'image/png' && $tipo != 'image/jpg' && $tipo != 'image/JPG' &&$tipo != 'image/jpeg' &&$tipo != 'image/gif'&&$tipo != 'image/svg') {
        $nombreImagen = "noimage.jpg";
    }else {
        $src = $carpeta.$nombreImagen;
        move_uploaded_file($rutaImagen, $src);
    }
    
    $query = "INSERT INTO añadir (img, material, descripcion, cantidad, estado, estado1, precio, precioT, vendidos) VALUES ('$nombreImagen', '$material', '$descripcion', '$cantidad', '$estado','$estado1','$precio','$precioT','$vendidos')";
    $result = mysqli_query($conexion, $query);}

    if ($result) {
        header("location: ../index.php?id=$id");
    }else{
        echo "error";
    }
?>