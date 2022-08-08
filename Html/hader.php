<?php
session_start();
?>
<header>
    <div class="wrapper-menu">
        <div class="btn-translate-hide wrapper-caja ">
            <div class="caja">
                <b>
                    <p class="caja__texto" id="elegir" data-nav="1">Elegir idioma</p>
                </b>
                <img src="../Img/translateIcons/arrow.svg" alt="" class="caja__arrow ">
            </div>
            <div class="options">
                <div class="pais" id="idioma-español" onclick="traducir(this)">
                    <img src="../Img/translateIcons/es.webp" alt="">
                    <p data-nav="2">Español</p>
                </div>
                <div class="pais" id="idioma-ingles" onclick="traducir(this)">
                    <img src="../Img/translateIcons/en.webp" alt="">
                    <p data-nav="3">Inglés</p>
                </div>
            </div>
        </div>
        <img src="../Img/menu.svg" alt="" class="menu-hamburguer">
        <a href="../Html/Index.php" class="logo-grid">
            <h3 class="logo ">Los Tipiquisimos</h3>
        </a>
        <nav class="nav-hide">
            <a href="../Html/nosotros.php" data-nav="4">¡Sobre nosotros!</a>
            <div class="container-menu-desplegable">

                <p class="main-text"><a href="" data-nav="5">Recetas</a></p>

                <div class="more-options-recetas">
                    <p><a href="../COMIDAS/base-navidena.php"><span data-nav="6">Navideñas</span> </a></p>
                    <p><a href="../COMIDAS/base-semanasanta.php"><span data-nav="7">Semana santa</span></a></p>
                    <p><a href="../COMIDAS/base-pupusas.php"><span data-nav="8">pupusas</span></a></p>
                    <p><a href="../COMIDAS/base-postres.php"><span data-nav="9">postres</span></a></p>
                    <p><a href="../COMIDAS/base-tamales.php"><span data-nav="10">Tamales</span></a></p>
                    <p><a href="../COMIDAS/base-sopas.php"><span data-nav="11">Sopas </span></a></p>
                    <p><a href="../COMIDAS/base-tipica.php"><span data-nav="12">Recetas tipicas</span></a></p>
                    <p><a href="../COMIDAS/base-atoles.php"><span data-nav="13">Atoles</span></a></p>
                </div>

            </div>
            </a>
            <a href="../Html/subir.php" data-nav="14">¿Quieres subir tu receta?</a>
            <a href="../COMIDAS/Comunidad.php" data-nav="15">Comunidad</a>
        </nav>


        <?php if (!isset($_SESSION['aña'])) { ?>
            <a href="../Html/Iniciarsecion.php" class="hide-login"><button class="but" data-nav="16">Iniciar sesión</button></a>
        <?php } else {  ?>
            <p class="main-text"><a href="" data-nav="5"><img src="../icons/icon-iniciar.png"></a></p>

            <div class="more-options-recetas-i">
            <a href="../Html/close.php" class="hide-login"><button class="but">cerrar sesion</button></a>
            </div>

        <?php } ?>

    </div>
</header>