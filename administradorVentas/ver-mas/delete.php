<?php

session_start(); 

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../../ups.php");
    
}

include("../../conexion/db.php");

$id=$_GET['id'];

$sql="DELETE FROM añadir  WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location:../index.php");
    }
?>