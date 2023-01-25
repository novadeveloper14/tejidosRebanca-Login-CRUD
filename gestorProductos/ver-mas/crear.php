<?php
include("../../conexion/db.php");
$id=$_POST['id'];
$img=$_POST['img'];



$sql="INSERT INTO añadir VALUES('$id','$img')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location:mas-1.php");
    
}else {
    echo 'faileddd';
}
?>