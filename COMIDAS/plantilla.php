<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stilo.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/space.js"></script>
    <title>Comunidad</title>
</head>

<body>

    <!--MENU-->
    <?php
    include "../Html/hader.php";
    include "../Html/m-comunidad.php";
    ?>

    <?php
    if (isset($_POST['ingre'])){
        $text = $_POST['ingre'];
        $text = preg_replace("#\[sp\]#", "&nbsp;" , $text);
        $text = preg_replace("#\[nl\]#", "<br>\n" , $text);
        echo $text;
    }
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <?php
            if ($conexion) {
                $id = $_GET["estiben"];
                $consu = "SELECT * FROM `subir` WHERE `id-subir` = $id";
                $result = mysqli_query($conexion, $consu);
                if ($result) {


                    while ($most = $result->fetch_array()) {
            ?>
                        <img src="../IMG-comunidad/<?php echo $most['imagen']; ?>" alt="">
                        <div class="recetas-letras">
                            <h1><?php echo $most['nombre-receta']; ?></h1>
                            <p>
                                <?php echo $most['descripcion']; ?>
                            </p>
                        </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1>Ingredientes:</h1>
                <p>
                <ul type="square">
                    <li><?php echo $most['ingredientes']; ?></li>
                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>
                        <?php echo $most['pasos']; ?>
                    </li><br>
                </ol>
            </div>
        </div>
<?php
                    }
                }
            }
?>
    </section>
    <!--::::Pie de Pagina::::::-->
    | <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; Los Tipiquisimos 2022-Derechos reservados</p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>