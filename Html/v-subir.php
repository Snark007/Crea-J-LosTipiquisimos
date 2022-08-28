<?php

$conexion = mysqli_connect('localhost', 'root', '', 'db_tipiquisimos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}




if ($_POST) {

    if ($_FILES['img-receta']['type'] != "image/jpeg" && $_FILES['img-receta']['type'] != "image/png" && $_FILES['img-receta']['type'] != "image/gif") {
?>
        <div class="error">
            <h1>Error esa cosa no va bro......</h1>
        </div>

<?php
        header("location:subir.php");
        mysqli_close($conexion);
    } else {
        $descripcion_r = $_POST['desc'];
        $ingredientes_r = nl2br($_POST['ingre']);
        $preparacion_r = nl2br($_POST['proce']);
        $img = $_FILES['img-receta']['name'];
        $ruta = "../IMG-comunidad/" . $_FILES['img-receta']['name'];
        $nombre_r = $_POST['nombre'];

        //Funcion para guardar imagenes - move_uploaded_file pide dos argumento
        //1-Nombre temporal 2-Nombre con el que se va a guardar
        move_uploaded_file($_FILES['img-receta']['tmp_name'], "../IMG-comunidad/" . $_FILES['img-receta']['name']);

        $sql = "INSERT INTO `subir` (`id-subir`, `nombre-receta`, `descripcion`, `ingredientes`, `pasos`, `imagen`)
        VALUES (NULL, '$nombre_r', '$descripcion_r', '$ingredientes_r', '$preparacion_r', '$ruta');";
        if (mysqli_query($conexion, $sql)) {
            echo "New record created successfully";
        }
        header("location:comunidad.php");
        mysqli_close($conexion);
    }
}










?>