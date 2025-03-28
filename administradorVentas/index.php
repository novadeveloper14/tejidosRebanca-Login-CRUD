<?php 

session_start(); 

include("../conexion/db.php");

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
}

$sql="SELECT * FROM empleados WHERE idEmpleado='$sesion'";
$query=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2ef3fe6e41.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilos.css">
        <link rel="icon" href="ima/image.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/402bbae3b2.js" crossorigin="anonymous"></script>
        <title>Administrador de ventas</title>
    </head>

    <body>
        <header>
        <div id="logo">
                <a href="https://tejidosrebanca.com/" target=”_blank”><img src="ima/icono.png"></a>
            </div>
            <div id="buscador">
            <form action="buscar.php" method="POST">
                <input type="text" id="keywords" name="keywords" size="30" maxlength="30">
                <input type="submit" name="search" id="search" value="→">
            </form>
            </div>
            <div id="botones">
                
                <a href="../reportes/index.php">Reportes</a>
            </div>
            <div class="cerrar perfil">
                    <a href="">
                        <img src="../jefe/ima/<?php echo $row['fotoPerfil']?>">
                        <p><?php echo $row['nombreUsuario']?></p>
                    </a>
            </div>
            <div class="cerrar">
                    <a href="../cerrar.php">
                        <img src="ima/arrow-right-from-bracket-solid.svg">
                        <p>Cerrar Sesion</p>
                    </a>
            </div>
        </header>
        <section>
            <aside>

                <ol>
                <?php  include("menu-aside.php")?>
                </ol>
                
            </aside>
            
            <div id="contenedor-articulos">
            <?php  include("registro.php")?>
           
            </div>
        </section>
        
    </body>

</html>