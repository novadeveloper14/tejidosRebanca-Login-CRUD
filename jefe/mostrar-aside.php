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
                ?>
                    <li><a href="modificar-empleado/index.php?id=<?php echo $row['idEmpleado'] ?>"><?php echo $nombreUsuario?></a></li>
                <?php
                }
            }
        }
        ?>