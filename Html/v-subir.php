<?php

$conexion = mysqli_connect('localhost', 'root', '', 'db_tipiquisimos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}



insertar($conexion);

function insertar($conexion)
{
    $nombre_r = $_POST['nombre'];
    $descripcion_r = $_POST['nombre'];
    $ingredientes_r = $_POST['nombre'];
    $preparacion_r = $_POST['nombre'];



    $sql = "INSERT INTO `subir`(`id-subir`, `nombre-receta`, `descripcion`, `ingredientes`, `pasos`, `imagen`, `creador`) 
        VALUES (NULL, '$nombre_r', '$descripcion_r', '$ingredientes_r', '$preparacion_r')";
    if (mysqli_query($conexion, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
    header("location:subir.php");
}

?>