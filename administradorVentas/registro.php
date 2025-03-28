<?php 

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
}

 $inc=include("../conexion/db.php");;
 $sql="SELECT *  FROM añadir WHERE estado=1";
 $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
 if ($inc) {
    $consulta= "SELECT * FROM añadir WHERE estado=1";
    $resultado= mysqli_query($conexion,  $consulta);
    if ($resultado){
        while ($row = $resultado->fetch_array()){
            $id=$row['id'];
            $img=$row['img'];
            $material=$row['material'];
            $descripcion=$row['descripcion'];
            $cantidad=$row['cantidad'];
            $precio=$row['precio'];
            $vendidos=$row['vendidos'];
            $precioT=$row['precioT'];



            

            ?>
            <article>
                    <div class="contenedor-articulo">
                        <div id="imagen-articulo">
                            <img src="../gestorProductos/ima/<?php echo "$img" ?>"> 
                        </div>
                        <div id="contenido-articulo">
                            <h2> <?php echo "$material" ?> </h2>
                            <p>Descripcion: <?php echo "$descripcion" ?> </p> 
                            <p>Disponibles: <?php echo "$cantidad" ?> </p>
                            <p>Precio: $<?php echo "$precio" ?> </p>
                            <p>Vendidos: <?php echo "$vendidos" ?> </p>
                            <p>Ingreso total: $<?php echo "$precioT" ?> </p>
                           


                            <div class="boton-contenido">
                            <a href="ver-mas/mas-1.php?id=<?php echo $row['id'] ?>">Inspeccionar</a>
                             
                            </div>
                        </div>
                    </div>
                </article>
            

         
            <?php
                }
            }
        }
        ?>