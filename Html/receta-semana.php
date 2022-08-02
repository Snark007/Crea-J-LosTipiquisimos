<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/receta.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>
</head>

<body>
    <!--MENU-->
    <?php 
     include "hader.php";
     ?>



    <!--BASE-->

    <section>
        <div class="basic">

            <h1 class="start">Aquí están nuestras recetas.</h1>
            <hr class="space">
            <p class="letters">Tenemos disponibles los diferentes catalogos de recetas.</p>
        </div>

        <div class="container2">

            <a href="../COMIDAS/navidenas.php">
                <div class="card">
                    <img src="../Img/nav.jpg">
                    <h4>Navideñas</h4>
                    <p>En el salvador se acostumbra a cocinar en Navidad con familia.</p><br>
                    <div class="ver"> Ver más</div>
                </div>
            </a>

            <a href="../COMIDAS/semanasanta.php">
                <div class="card">
                    <img src="../Img/semana.jpg">
                    <h4>Semana Santa</h4>
                    <p> Semana Santa se celebra con comidas sensillas pero exquisitas.</p><br>
                    <div class="ver"> Ver más</div>
                </div>
            </a>

            <a href="../COMIDAS/plantilla.php">
                <div class="card">
                    <img src="../Img/pupusa.jpg">
                    <h4>Pupusas</h4>
                    <p>Las pupusan son el platillo más representativo y delicioso de el Salvador.</p>
                    <div class="ver"> Ver más</div>
                </div>
            </a>
    </section>
    <section>

        <div class="container2">

            <a href="../COMIDAS/postres.php">
                <div class="card">
                    <img src="../Img/POSTRES-SV.jpg">
                    <h4>Postres</h4>
                    <p>Los postres son una gran parte de la gastronomia salvadoreña.Mira las recetas</p>
                    <div class="ver"> Ver más</div>
                </div>
            </a>

            <a href="../COMIDAS/tamales.php">
                <div class="card">
                    <img src="../Img/tamales.jpg">
                    <h4>Tamales</h4>
                    <p> Los tamales salvadoreños es parte de la cocina tradicional, A base de maíz.</p><br>
                    <div class="ver"> Ver más</div>
                </div>
            </a>

            <a href="../COMIDAS/sopas.php">
                <div class="card">
                    <img src="../Img/sopas.jpg">
                    <h4>Sopas</h4>
                    <p>Son muchas las recetas de sopas salvadoreñas, pero lo cierto es que las hay mas preferidas unas
                        que otras.</p>
                    <div class="ver"> Ver más</div>
                </div>
            </a>
    </section>
    <section>


        <div class="container2">

            <a href="../COMIDAS/comida.php">
                <div class="card">
                    <img src="../Img/yuca.jpg">
                    <h4>Recetas típicas</h4>
                    <p>En este apartado estan los platos mas reconocidos y tipiquisimos salvadoreños</p>
                    <div class="ver"> Ver más</div>
                </div>
            </a>
            <a href="../COMIDAS/Atoles.php">
                <div class="card">
                    <img src="../Comida/chuco.jpg">
                    <h4>Atoles</h4>
                    <p>En la gastronomia Salvadoreña hay mucha variedad de Atoles. Veamos</p><br>
                    <div class="ver"> Ver más</div>
                </div>
            </a>


        </div>
    </section>
    <!--PIE DE PAGINA-->
    <footer>
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