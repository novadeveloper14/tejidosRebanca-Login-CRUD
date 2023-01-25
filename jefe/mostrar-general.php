<?php

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
}

    $inc = include("../conexion/db.php");
    $sql="SELECT *  FROM empleados";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    if($inc) {
        $consulta = "SELECT * FROM empleados";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $idEmpleado = $row['idEmpleado'];
                $nombreUsuario = $row['nombreUsuario'];
                $rol = $row['rol'];
                $fotoPerfil = $row['fotoPerfil'];
                $apellido = $row['apellido'];
                $biografia = $row['biografia'];
                if ($rol == 1) {
                    $rol = "Jefe";
                } elseif ($rol == 2) {
                    $rol = "Administrador De Ventas";
                } elseif ($rol == 3) {
                    $rol = "Gestor De Productos";
                } elseif ($rol == 4) {
                    $rol = "Diseñador";
                } else{
                    $rol = "Indefinido";
                }
                ?>
                
                <article>
                    <div class="contenedor-articulo">
                        <div id="imagen-articulo">
                        <img src="ima/<?php echo $fotoPerfil?>">
                        </div>
                        <div id="contenido-articulo">
                            <h2><?php echo $nombreUsuario?> <?php echo $apellido?></h2>
                            <p>ID: <?php echo $idEmpleado?><br>

                                Rol: <?php echo $rol?><br>

                                Biografia: <?php echo $biografia?></p>
                            <div class="boton-contenido">
                            
                            <a href="modificar-empleado/index.php?id=<?php echo $row['idEmpleado'] ?>">Editar</a>
                            
                            </div>
                        </div>
                    </div>
                </article>
                <?php
                }
            }
        }
        ?>