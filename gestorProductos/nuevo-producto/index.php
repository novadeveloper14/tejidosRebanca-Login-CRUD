<?php

include("../../conexion/db.php");
$sql="SELECT * FROM añadir";

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
        <title>Rebanca-nuevo-Producto</title>
    </head>

    <script type="text/javascript">
                function alertCreate() {
                    var respuesta = alert("Producto agregado con exito!");
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
                <a href="../index.php?id=<?php echo $row['id'] ?>">
                    <img src="../ima/angle-left-solid.svg">
                    <p>Volver</p>
                </a>
            </div>
        </header>
        <section>
            <form action="insertar.php" method="post" enctype="multipart/form-data">
                <div id="preguntas">

                    <h2>Nuevo Producto <i class="fas fa-briefcase"></i></h2>

                    <div class="preg" id="preg-imagen">
                        <input type="file" placeholder="Link de la imagen del producto"  id="file" name="img">
                    </div>
                    <div id="preview" id="imagen-subida">
                    </div>

                    <div class="preg" id="preg-nombre">
                        <input type="text" required placeholder="Nombre del Producto" name="material">
                    </div>

                    <div class="preg" id="preg-apellidos">
                        <input type="text" required placeholder="Descripcion" name="descripcion">
                    </div>
                    
                    <div class="preg" id="preg-gmail">
                        <input type="number" required placeholder="cantidad" name="cantidad">
                    </div>
                    
                    <div class="preg" id="preg-biografia">
                        <select name="estado">
                            <option hidden selected value=2>Estado</option>
                            <option value=1>Habilitado</option>
                            <option value=0>Inhabilitado</option>
                        </select>
                    </div>

                    <div id="botones">
                        <div class="btn" id="submit">
                            <input type="submit" value="Ingresar" name="insertar" onclick="return alertCreate()">
                        </div>

                        <div class="btn" id="restablecer">
                            <input type="reset" value="Borrar" onclick="return confirmDelete()">
                        </div>
                    </div>
                    <div class="preg" id="preg-gmail">
                        <input type="hidden" required placeholder="Estado1" name="estado1" value="0">
                    </div>
                    
                    <div class="preg" id="preg-gmail">
                        <input type="hidden" required placeholder="precio" name="precio" value="0">
                    </div>
                    
                    <div class="preg" id="preg-gmail">
                        <input type="hidden" required placeholder="precioT" name="precioT" value="0">
                    </div>
                    
                    <div class="preg" id="preg-gmail">
                        <input type="hidden" required placeholder="vendidos" name="vendidos" value="0">
                    </div>
                </div>
            </form>
        </section>  
    </body>
</html>