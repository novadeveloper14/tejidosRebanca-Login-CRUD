<?php
include('verificarDatos/config.php');
$idEmplead		    = $_REQUEST['idEmpleado'];
$tokenUser 		= $_REQUEST['tokenUser'];
$contraseña     = $_REQUEST['contraseña'];

$updateClave    = ("UPDATE login SET contraseña='$contraseña' WHERE idEmpleado='".$id."' AND tokenUser='".$tokenUser."' ");
$queryResult    = mysqli_query($con,$updateClave); 

?>

<meta http-equiv="refresh" content="0;url=index.php?email=1"/>