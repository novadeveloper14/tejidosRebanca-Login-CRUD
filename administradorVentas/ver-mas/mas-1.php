<?php 

session_start(); 

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../../ups.php");
    
}
    include("../../conexion/db.php");

    $id=$_GET['id'];

$sql="SELECT * FROM añadir ventas WHERE id='$id'";
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
        <form action="actualizar.php" method="post">
                <div id="preguntas">

                    <h2>Inspeccionar Producto</h2>
                    <div class="preg" id="preg-imagen">
                    <img src="../../gestorProductos/ima/<?php echo $row['img']  ?>"></img>
                        <input type="hidden"  placeholder="Link de la nueva imagen" name="img" value="<?php echo $row['img']  ?>">
                    </div>
                    <h3><?php echo $row['material'] ?></h3>
                    <h3>Cantidad: <?php echo $row['cantidad'] ?></h3>
                    <h4>Precio individual</h4>
                    <div class="preg" id="preg-nombre">
                    <input type="number" name="precio"   required id="precio" placeholder="Precio del producto" value="<?php echo $row['precio']  ?>">
                    </div>
                    <h4>Total vendidos</h4>
                    <div class="preg" id="preg-nombre">
                    <input type="number" name="vendidos"   required id="vendidos" placeholder="Cantidad de productos vendidos" value="<?php echo $row['vendidos']  ?>">
                    </div>
                    <h4>Generado total: <b>$<?php echo $row['precioT']  ?></b></h4>
                    <div id="botones">
                        <div class="btn" id="submit">
                            <input type="submit" value="Enviar"></input>
                        </div>
                        </div>



                    <div class="preg" id="preg-nombre">
                    
                    <input type="hidden"  name="material"   required id="material" placeholder="Material del Producto"value="<?php echo $row['material']  ?>">
                </div>

                <div class="preg" id="preg-biografia">
                    <input  type="hidden"  name="descripcion" id="descripcion" required placeholder="Descripcion del producto:"value="<?php echo $row['descripcion']  ?>">
                </div>
                    <div class="preg" id="preg-contraseña">
                     <input type="hidden"  name="cantidad" id="cantidad" required placeholder="Cantidad de productos" value="<?php echo $row['cantidad']  ?>">
                    </div>
  
                    <div class="preg" id="preg-nombre">
                        <input type="hidden" required placeholder="ID" name="id" value="<?php echo $row['id']  ?>">
                    </div>
                    

                   
                    <div class="preg" id="preg-nombre">
                        <input type="hidden" required placeholder="ID" name="id" value="<?php echo $row['id']  ?>">
                    </div>

                    </div>
                </div>
            </form>
        </section>  
    </body>
</html>

