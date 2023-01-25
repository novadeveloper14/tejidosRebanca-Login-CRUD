<?php

session_start(); 

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../../ups.php");
    
}

include("../../conexion/db.php");
$sql="SELECT * FROM empleados";

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
        <title>Rebanca-nuevo-empleado</title>
    </head>

    <script type="text/javascript">
                function alertCreate() {
                    var respuesta = alert("Empleado agregado con exito!");
                    return;
                }
                function confirmDelete() {
                    var respuesta = confirm("Estas seguro que deseas eliminar los datos ingresados?.");
                    if (respuesta == true) {
                     return true;
                    } else{
                      return false;
                    }
                }
    </script>

    <body>
        <header>
            <div id="logo">
                <a href="../index.php?id=<?php echo $row['idEmpleado'] ?>">
                    <img src="../ima/angle-left-solid.svg">
                    <p>Volver</p>
                </a>
            </div>
            
        </header>
        <section>
            <form action="insertar.php" method="post" enctype="multipart/form-data">
                <div id="preguntas">

                    <h2>Nuevo Empleado <i class="fas fa-briefcase"></i></h2>

                    <div class="preg" id="preg-imagen">
                        <h3>foto de perfil</h3>
                        <input type="file" placeholder="imagen"  id="file" name="fotoPerfil">
                    </div>
                    <div id="preview" id="imagen-subida">
                    </div>

                    <div class="preg" id="preg-nombre">
                        <input type="text" required placeholder="Nombres" name="nombreUsuario">
                    </div>

                    <div class="preg" id="preg-apellidos">
                        <input type="text" required placeholder="Apellido" name="apellido">
                    </div>

                    <div class="preg" id="preg-gmail">
                        <input type="email" required placeholder="Gmail" name="gmail">
                    </div>

                    <div class="preg" id="preg-años">
                        <h3>Fecha de nacimiento</h3>
                        <input type="date" required name="fechaNacimiento"  >
                    </div>

                    <div class="preg" id="preg-indentificacion">
                        <select>
                            <option>Cedula de ciudadania</option>
                            <option>Pasaporte</option>
                            <option>Cedula de extranjeria</option>
                        </select>
                     <input type="number" required placeholder="Numero de identificacion" name="documento">
                    </div>

                    <div class="preg" id="preg-biografia">
                        <input type="text" required placeholder="Biografia" name="biografia">
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
                     <input type="text" name="contraseña" required placeholder="Contraseña nueva (Minimo 4 caracteres)." name="contraseña">
                    </div>

                    <div id="botones">
                        <div class="btn" id="submit">
                            <input type="submit" value="Ingresar" name="insertar" onclick="return alertCreate()">
                        </div>

                        <div class="btn" id="restablecer">
                            <input type="reset" value="Borrar" onclick="return confirmDelete()">
                        </div>
                    </div>
                </div>
            </form>
        </section>  
    </body>
</html>