<?php

$conexion = mysqli_connect('localhost','root', '', 'db_tipiquisimos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];

$contra = $_POST['contrasenia'];

session_start();

$_SESSION['usuario'] = $usuario;
$consu = "SELECT*FROM user_info where nombre_usu='$usuario' and contrasenia='$contra'";
$result = mysqli_query($conexion,$consu);


$filas = mysqli_num_rows($result);

if ($filas) {
    $consu = "SELECT*FROM user_info where nombre_usu='$usuario' and contrasenia='$contra'";
    $result2 = mysqli_query($conexion,$consu);
    $data = mysqli_fetch_array($result2, MYSQLI_NUM);
    $_SESSION['aña'] = "logeado";
    $_SESSION['id'] = $data[0][0];
    
header("location:index.php");
} else {
    ?>
    <?php
    include("Iniciarsecion.php")
    ?>
    <div class="login-box1">

        <h1>Error: Usuario o contraseña no validos</h1>
    </div>
    
    <?php
}
mysqli_free_result($result);
mysqli_close($conexion);

?>