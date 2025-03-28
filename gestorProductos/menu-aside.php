<?php

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
};

    $inc = include("../conexion/db.php");
    $sql="SELECT *  FROM añadir";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    if($inc) {
        $consulta = "SELECT * FROM añadir";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id'];
                $material = $row['material'];
                $estado = $row['estado'];
                ?>
                    <li> <?php
                            if ($estado == 0 ) {
                                $estado = 'Inactivo';
                                ?>
                                <div class="boton" style="margin-right: 0px;  margin-top: 0px;  justify-content: center; font-size: 1.5vh;"><i class="fas fa-circle"></i></div>
                                <?php
                            } elseif ($estado == 1) {
                                $estado = 'Activo';
                                ?>
                                <div class="boton1" style="margin-right: 0px;  margin-top: 0px;  justify-content: center; font-size: 1.5vh;"><i class="fas fa-circle"></i></div>
                                <?php
                            }
                            elseif ($estado == 2) {
                                $estado = 'Activo';
                                ?>
                                <div class="boton2" style="margin-right: 0px;  margin-top: 0px;  justify-content: center; font-size: 1.5vh;"><i class="fas fa-circle"></i></div>
                                <?php
                            }
                            ?><a href="ver-mas/mas-1.php?id=<?php echo $row['id'] ?>"><?php echo $material?></a></li>
                <?php
                }
            }
        }
        ?>