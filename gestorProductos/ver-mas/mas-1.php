<?php 
    include("../../conexion/db.php");

    $id=$_GET['id'];

$sql="SELECT * FROM añadir WHERE id='$id'";
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
        <title>Inspeccionar-empleado</title>
    </head>
    
    <script type="text/javascript">
            function confirmDelete() {
                var respuesta = confirm("Estas seguro que deseas eliminar este producto?.");
                if (respuesta == true) {
                     return true;
                } else{
                      return false;
                }
            }
            function alertActualizacion() {
                var respuesta = alert("producto actualizado con exito!");
                return;
            }
    </script>

    <body>
    <header>
            <div id="logo">
                <a href="../index.php">
                    <img src="ima/angle-left-solid.svg">
                    <p>Volver</p>
                </a>
            </div>
        </header>
        <section>
        <form action="actualizar.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                <div id="preguntas">

                    <h2>Inspeccionar Producto</h2>

                    
                    <?php
                            if ($row['estado'] == 0 ) {
                                $estado = 'Inactivo';
                                ?>
                                <div class="boton" style="margin-right: 0px;  margin-top: 0px;  justify-content: center; font-size: 1.5vh;"><i class="fas fa-circle"></i></div>
                                <?php
                            } elseif ($row['estado'] == 1) {
                                $estado = 'Activo';
                                ?>
                                <div class="boton1" style="margin-right: 0px;  margin-top: 0px;  justify-content: center; font-size: 1.5vh;"><i class="fas fa-circle"></i></div>
                                <?php
                            }
                            elseif ($row['estado'] == 2) {
                                $estado = 'Activo';
                                ?>
                                <div class="boton2" style="margin-right: 0px;  margin-top: 0px;  justify-content: center; font-size: 1.5vh;"><i class="fas fa-circle"></i></div>
                                <?php
                            }
                        ?>
                

                    <div class="preg" id="preg-imagen">
                    <img src="../ima/<?php echo $row['img']  ?>"></img>
                        <input type="file" placeholder="Link de la nueva imagen" name="img" value="<?php echo $row['img']  ?>">
                    </div>
                    <div class="preg" id="preg-nombre">
                    
                    <input type="text" name="material"   required id="material" placeholder="Material del Producto"value="<?php echo $row['material']  ?>">
                </div>

                <div class="preg" id="preg-biografia">
                    <input type="text" name="descripcion" id="descripcion" required placeholder="Descripcion del producto:"value="<?php echo $row['descripcion']  ?>">
                </div>
                    <div class="preg" id="preg-contraseña">
                     <input type="text" name="cantidad" id="cantidad" required placeholder="Cantidad de productos" value="<?php echo $row['cantidad']  ?>">
                    </div>
                    <div class="preg" id="preg-biografia">
                        <select name="estado">
                            <option hidden selected value=2>Estado</option>
                            <option value=1>Habilitado</option>
                            <option value=0>Inhabilitado</option>
                        </select>
                    </div>
                    <div class="preg" id="preg-biografia">
                        <input type="hidden" required placeholder="Estado" value="<?php echo $row['estado1']?>" name="estado1" min="0" max="1">
                    </div>
                    <div class="preg" id="preg-nombre">
                        <input type="hidden" required placeholder="ID" name="id" value="<?php echo $row['id']  ?>">
                    </div>


                    <div id="botones">
                        <div class="btn" id="submit">
                            <input type="submit" value="Actualizar" onclick="return alertActualizacion()"></input>
                        </div>

                        <div class="btn" id="borrar">
                            <a href="delete.php?id=<?php echo $row['id'] ?>"><img src="../../jefe/modificar-empleado/ima/trash-solid.svg" onclick="return confirmDelete()"></a>
                        </div>
                    </div>
                </div>
            </form>
        </section>  
    </body>
</html>

