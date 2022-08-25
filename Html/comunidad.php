<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/stilo-plantilla.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <link rel="stylesheet" href="../Css/bases.css">
    <script defer src="../Js/menu.js"></script>
    <title>Comunidad</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../Html/hader.php";
    include "../Html/m-comunidad.php";
    ?>
    <!--BASE-->

    <section class="baja">
        <div class="basic">
            <div class="top">
                <h1 class="start"> <span data-atoles="1"> Recetas de la comunidad</span></h1>

                <br>
                <h2 class="start"><span data-atoles="2">Estas son las recetas que la comunidad a preparado para tí</span></h2>
            </div>
        </div>

        <div class="container2">

            <?php
            if ($conexion) {
                $consu = "SELECT * FROM `subir`";
                $result = mysqli_query($conexion, $consu);
                if ($result) {


                    while ($most = $result->fetch_array()) { ?>
                        <a href="../COMIDAS/plantilla.php?estiben=<?php echo $most['id-subir']; ?>">
                            <div class="card">
                                <img src="../IMG-comunidad/<?php echo $most['imagen']; ?>">
                                <h4><span data-atoles="3"><?php echo $most['nombre-receta']; ?></span></h4>
                                <p><span data-atoles="4"><?php echo  $most['descripcion']; ?></span></p>

                                <div class="ver"><span data-atoles="5"> Ver más</span></div>

                            </div>
                        </a>

            <?php          }
                }
            }
            ?>

    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"> <span data-atoles="12"> Los Tipiquisimos</span></h3>
            <p>&copy; <span data-atoles="13"> Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>