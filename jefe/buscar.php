<?php

$sesion = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    header("location: ../ups.php");
    
}
//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];

    //Conectamos con la base de datos en la que vamos a buscar
    include("../conexion/db.php");

    $sql = "SELECT * FROM empleados
                WHERE (nombreUsuario LIKE '%" . $keywords . "%'
                OR apellido LIKE '%" . $keywords . "%'OR idEmpleado LIKE '%" . $keywords . "%')
                ORDER BY idEmpleado";

    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    $count_results = mysqli_num_rows($query);
    $idEmpleado = $row['idEmpleado'];

    //Si hay resultados
    if ($count_results > 0) {
        header("location: modificar-empleado/index.php?id=$idEmpleado");
    }else {
        //Si no hay registros encontrados
        header("location: index.php?id=$idEmpleado");
    }
}
?>