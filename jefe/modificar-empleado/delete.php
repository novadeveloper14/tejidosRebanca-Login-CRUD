<?php

include("../../conexion/db.php");

$idEmpleado=$_GET['id'];

$sql="DELETE FROM empleados  WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location:../index.php");
    }
?>
