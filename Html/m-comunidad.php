<?php
$conexion = mysqli_connect('localhost', 'root', '', 'db_tipiquisimos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($conexion) {
    $consu = "SELECT * FROM `subir`";
    $result = mysqli_query($conexion, $consu);
    if ($result) {
        while ($most = $result->fetch_array()) {
            $id = $most ['id-subir'];
            $descripcion_r = $most['descripcion'];
            $ingredientes_r = $most['ingredientes'];
            $preparacion_r = $most['pasos'];
            $img = $most ['imagen']; 
            //$img = $_FILES['img-receta']['image'];
            //$ruta = "../IMG-comunidad/".$_FILES['img-receta']['name'];
            $nombre_r = $most['nombre-receta'];
        }
    }


}

?>