<?php

$conexion = mysqli_connect('localhost', 'root', '', 'db_tipiquisimos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}



if ($_POST) {
    $descripcion_r = $_POST['desc'];
    $ingredientes_r = $_POST['ingre'];
    $preparacion_r = $_POST['proce'];
    $img = $_FILES['img-receta']['name'];
    $ruta = "../IMG-comunidad/".$_FILES['img-receta']['name'];
    //$imgT = $_FILES['img-receta']['tmp_name'];
    $nombre_r = $_POST['nombre'];

    //print_r($_FILES['img-receta']);
    //Funcion para guardar imagenes - move_uploaded_file pide dos argumento
    //1-Nombre temporal 2-Nombre con el que se va a guardar
    move_uploaded_file($_FILES['img-receta']['tmp_name'],"../IMG-comunidad/".$_FILES['img-receta']['name']);

    $sql = "INSERT INTO `subir` (`id-subir`, `nombre-receta`, `descripcion`, `ingredientes`, `pasos`, `imagen`)
     VALUES (NULL, '$nombre_r', '$descripcion_r', '$ingredientes_r', '$preparacion_r', '$ruta');";
}

if (mysqli_query($conexion, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
header("location:subir.php");


?>