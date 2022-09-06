<?php
session_start();
include "m-comunidad.php";
$id = $_SESSION['id'] ?? '';
$consulta = "SELECT * FROM `user_info` WHERE `id-registro` = $id";
$resultado = mysqli_query($conexion, $consulta);

$most = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

if(!$most){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <link rel="stylesheet" href="../css/prueba.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_index.js"></script>
</head>

<body>
    <!--MENU-->
    <?php
    include "hader.php";

    ?>
    <!--BASE-->
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="../Img/chef.png" alt="img-avatar">

                    <i class="far fa-image"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $most['nombre']; ?></h3>

            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Nombre de usuario:</li>
                    <li><i class="icono fas fa-phone-alt"></i> Correo:</li>
                    <li><i class="icono fas fa-briefcase"></i> Contraseña:</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i><?php echo $most['nombre_usu']; ?></li>
                    <li><i class="icono fas fa-calendar-alt"></i><?php echo $most['correo']; ?></li>
                    <li><i class="icono fas fa-user-check"></i><?php echo $most['contrasenia']; ?></li>
                </ul>
            </div>
        </div>
    </section>


    </div>
</body>

</html>