<?php

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
}

    $inc = include("../conexion/db.php");;
    $sql="SELECT *  FROM añadir WHERE estado=1";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    if($inc) {
        $consulta = "SELECT * FROM añadir WHERE estado=1";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id'];
                $material = $row['material'];
                ?>
                    <li><a href="ver-mas/mas-1.php?id=<?php echo $row['id'] ?>"><?php echo $material?></a></li>
                <?php
                }
            }
        }
        ?>