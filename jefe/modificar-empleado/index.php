<?php 

session_start(); 

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../../ups.php");
    
}

    include("../../conexion/db.php");

    $idEmpleado=$_GET['id'];

$sql="SELECT * FROM empleados WHERE idEmpleado='$idEmpleado'";
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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&amp;display=swap" rel="stylesheet">
        <title>Rebanca-editar-empleado</title>
    </head>

    <script type="text/javascript">
            function confirmDelete() {
                var respuesta = confirm("Estas seguro que deseas eliminar este empleado?.");
                if (respuesta == true) {
                     return true;
                } else{
                      return false;
                }
            }
            function alertActualizacion() {
                var respuesta = alert("Empleado actualizado con exito!");
                return;
            }
    </script>

    <body>
    <header>
            <div id="logo">
                <a href="../index.php?id=<?php echo $idEmpleado ?>">
                    <img src="../ima/angle-left-solid.svg">
                    <p>Volver</p>
                </a>
            </div>
        </header>
        <section>
        <form action="actualizar.php?id=<?php echo $row['idEmpleado']  ?>" method="post" enctype="multipart/form-data">
                <div id="preguntas">

                    <h2>Editar empleado <i class="fas fa-briefcase"></i></h2>

                    <div class="preg" id="preg-imagen">
                    <img src="../ima/<?php echo $row['fotoPerfil']  ?>"></img>
                        <input type="file" placeholder="Link de la nueva imagen" name="fotoPerfil" type="../ima/<?php echo $row['fotoPerfil']  ?>">
                    </div>

                    <div class="preg" id="preg-nombre">
                        <input type="hidden" required placeholder="ID" name="idEmpleado" value="<?php echo $row['idEmpleado']  ?>">
                    </div>

                    <div class="preg" id="preg-nombre">
                        <input type="text" required placeholder="Nuevo nombre (este nombre es el usuario de ingreso)" name="nombreUsuario" value="<?php echo $row['nombreUsuario']  ?>">
                    </div>

                    <div class="preg" id="preg-apellidos">
                        <input type="text" required placeholder="Nuevo apellido" name="apellido" value="<?php echo $row['apellido']  ?>">
                    </div>

                    <div class="preg" id="preg-gmail">
                        <input type="email" required placeholder="Nuevo Gmail" name="gmail" value="<?php echo $row['gmail']  ?>">
                    </div>

                    <div class="preg" id="preg-años">
                        <h3>Fecha de nacimiento</h3>
                        <input type="date" required name="fechaNacimiento" value="<?php echo $row['fechaNacimiento']  ?>">
                    </div>

                    <div class="preg" id="preg-indentificacion">
                        <select>
                            <option>Cedula de ciudadania</option>
                            <option>Pasaporte</option>
                            <option>Cedula de extranjeria</option>
                        </select>
                     <input type="number" required placeholder="Numero de identificacion" name="documento" value="<?php echo $row['documento']  ?>">
                    </div>

                    <div class="preg" id="preg-biografia">
                        <input type="text" required placeholder="Nueva biografia" name="biografia" value="<?php echo $row['biografia']?>">
                    </div>

                    <div class="preg" id="preg-biografia">
                        <select name="rol">
                            <option hidden selected value=0>Rol</option>
                            <option value=1>Jefe</option>
                            <option value=2>Administrador de ventas</option>
                            <option value=3>Gestor de productos</option>
                            <option value=4>Diseñador</option>
                        </select>
                    </div>

                    <div class="preg" id="preg-contraseña">
                    <br>
                     <input type="password" name="contraseña" required placeholder="Nueva contraseña (Minimo 4 caracteres)." name="contraseña" value="<?php echo $row['contraseña']?>">
                     <p>(Minimo 4 caracteres).</p>
                    </div>

                    <div id="botones">
                        <div class="btn" id="submit">
                            <input type="submit" value="actualizar" onclick="return alertActualizacion()"></input>
                        </div>

                        <div class="btn" id="borrar">
                            <a href="delete.php?id=<?php echo $row['idEmpleado'] ?>" onclick="return confirmDelete()"><img src="ima/trash-solid.svg"></a>
                        </div>
                    </div>
                </div>
            </form>
        </section>  
    </body>
</html>