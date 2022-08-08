<?php

$conexion = mysqli_connect('localhost', 'root', '', 'db_tipiquisimos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}



insertar($conexion);

function insertar($conexion) 
{
    $nom = $_POST['nombre'];
    $nombre_usu = $_POST['usu'];
    $correo = $_POST['corre'];
    $contrasenia = $_POST['contra'];



    $sql = "INSERT INTO `user_info` (`id-registro`, `nombre`, `nombre_usu`, `correo`, `contrasenia`) 
        VALUES (NULL, '$nom', '$nombre_usu', '$correo', '$contrasenia')";
    if (mysqli_query($conexion, $sql)) {
        echo "New record created successfully";
    } else {   
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
    header("location:iniciarsecion.php");
}

?>