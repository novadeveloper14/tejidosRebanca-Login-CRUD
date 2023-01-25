<?php

session_start();

include('conexion/db.php');
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
$sql="SELECT idEmpleado  FROM empleados WHERE nombreUsuario='$USUARIO' or gmail = '$USUARIO'";

$query=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($query);


$consulta1 = "SELECT * FROM empleados where (nombreUsuario = '$USUARIO' || gmail = '$USUARIO') and contraseña ='$PASSWORD' and rol = 1";
$resultado1= mysqli_query($conexion, $consulta1);

$filas1=mysqli_num_rows($resultado1);

$consulta2 = "SELECT * FROM empleados where (nombreUsuario = '$USUARIO' || gmail = '$USUARIO') and contraseña ='$PASSWORD' and rol = 2";
$resultado2= mysqli_query($conexion, $consulta2);

$filas2=mysqli_num_rows($resultado2);

$consulta3 = "SELECT * FROM empleados where (nombreUsuario = '$USUARIO' || gmail = '$USUARIO') and contraseña ='$PASSWORD' and rol = 3";
$resultado3= mysqli_query($conexion, $consulta3);

$filas3=mysqli_num_rows($resultado3);

$consulta4 = "SELECT * FROM empleados where (nombreUsuario = '$USUARIO' || gmail = '$USUARIO') and contraseña ='$PASSWORD' and rol = 4";
$resultado4= mysqli_query($conexion, $consulta4);

$filas4=mysqli_num_rows($resultado4);

if($filas1 && $consulta1){
    $id =  $row['idEmpleado'];

    $_SESSION['id'] = $id;
    
    header("location: jefe/index.php?id=$id");

} elseif ($filas2 &&  $consulta2) {
    $id =  $row['idEmpleado'];

    $_SESSION['id'] = $id;

    header("location: administradorVentas/index.php?id=$id");

} elseif ($filas3 &&   $consulta3) {
    $id =  $row['idEmpleado'];

    $_SESSION['id'] = $id;

    header("location: gestorProductos/index.php?id=$id");

} elseif ($filas4 &&  $consulta4) {
    $id =  $row['idEmpleado'];

    $_SESSION['id'] = $id;

    header("location: diseñador/index.php?id=$id");

}

else{
    ?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2ef3fe6e41.js" crossorigin="anonymous"></script>
        <script src="js/preview.js"></script>
        <link rel="stylesheet" href="estilos.css">
        <link rel="icon" href="ima/image.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/402bbae3b2.js" crossorigin="anonymous"></script>
        <title>Ingreso a Tejidos Rebanca</title>
    </head>

    <body onload="nobackbutton();">
        <div id="contenedor">


          <form action="validar.php" method="post">
            <div id="preguntas">

                <div id="imagen">
                    <img src="ima/icono.png">
                </div>

                <div class="preg" id="pregnombre">
                <input type="text" required placeholder="Usuario" name="usuario">
                </div>

                <div class="preg" id="pregcontra">
                    <input type="password" required placeholder="Contraseña" name="password">
                </div>

                <h3>Nombre de usuario o contraseña incorrectos, porfavor verifica que los campos ingresados esten bien.</h3>

                <div id="forget-password">
                    <a href="olvidar-C/index.php">¿Has olvidado tu contraseña?</a>
                </div>

                <div id="botones">
                <div class="btn" id="submit">
                <input type="submit" required value="Ingresar">
                </div>

                <div class="btn" id="restablecer">
                <input type="reset" value="Borrar">
                </div>

                </div>

               </form>
            </div>
        </div>
    </body>
</html>
    <?php
    
}
mysqli_free_result($resultado1);
mysqli_free_result($resultado2);
mysqli_free_result($resultado3);
mysqli_free_result($resultado4);
mysqli_close($conexion);





?>