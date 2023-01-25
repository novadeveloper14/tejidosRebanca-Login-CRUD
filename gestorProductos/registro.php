<?php 

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
};

 $inc=include("../conexion/db.php");
 $sql="SELECT *  FROM añadir";  
 $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
 if ($inc) {
    $consulta= "SELECT * FROM añadir";
    $resultado= mysqli_query($conexion,  $consulta);
    if ($resultado){
        while ($row = $resultado->fetch_array()){
            $id=$row['id'];
            $img=$row['img'];
            $material=$row['material'];
            $descripcion=$row['descripcion'];
            $cantidad=$row['cantidad'];
            $estado=$row['estado'];

            ?>
            <article>
                    <div class="contenedor-articulo">
                        <div id="imagen-articulo">
                            <img src="ima/<?php echo $img ?>"> 
                        </div>
                        <div id="contenido-articulo">
                            <?php
                            if ($estado == 0 ) {
                                $estado = 'Inactivo';
                                ?>
                                <div class="boton"><i class="fas fa-circle"></i></div>
                                <?php
                            } elseif ($estado == 1) {
                                $estado = 'Activo';
                                ?>
                                <div class="boton1" ><i class="fas fa-circle"></i></div>
                                <?php
                            } else{
                                $estado = 'Espera';
                                ?>
                                <div class="boton2" ><i class="fas fa-circle"></i></div>
                                <?php
                            }
                            ?>
                            
                            <h2> <?php echo "$material" ?> </h2>
                            <p>Descripcion: <?php echo "$descripcion" ?> </p> 
                            <p>Disponibles: <?php echo "$cantidad" ?> </p>

                            <div class="boton-contenido"> 
                            <a href="ver-mas/mas-1.php?id=<?php echo $row['id'] ?>">Modificar</a>

                            </div>
                        </div>
                    </div>
                </article>
            

         
            <?php
                }
            }
        }
        ?>