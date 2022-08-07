<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/subirRecetas.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_subir.js"></script>
</head>

<body>
    <!--MENU-->
    <?php
    include "hader.php";
    ?>
    <!--BASE-->
    <main class="instructions-container">
        <div class="instructions">
            <h1 class="instructions-title"> <span data-subir="1"> Quieres subir tus recetas debes realizar los siguientes pasos al pies de la
                    letra como te indican. </span></h1>

            <div class="instructions-pasos">
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3> <span data-subir="2">Para empezar</span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="3">Primero ingresa el nombre de tu recetas de forma presisa como: pupusas de queso con loroco</span></p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>2</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3> <span data-subir="4"> Despues de eso</span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="5">Tendrás que poner una descripción de tus receta que anterior mente avías mencionado</span> </p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>3</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3> <span data-subir="6"> Una vez ya hecho el punto anterior </span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="7"> tienes que ingresar los igredientes de tu receta </span></p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>4</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3> <span data-subir="8"> Ahora tienes que </span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="9">Poner como lo preparastes para que los demas usuarios puedan segir la receta al pie de la letra </span> </p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>5</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3> <span data-subir="10"> Ya para terminar </span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="11"> Solo tienes que poner poner una imagen de referencia como que te tiene que quedar </span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="form">

            <form action="">
                <div class="wrapper-form">
                    <h2 class="instructions-title"> <span data-subir="12"> Solicitud de recetas</span></h2>

                    <div class="form-inputs">

                        <div class="inputs-form">
                            <label for="nombre-receta" class="label-form"> <span data-subir="13">Nombre de la receta</span> </label>
                            <input type="text" class="input">
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form"> <span data-subir="14">Descripcion</span></label>
                            <textarea name="" id="" cols="20" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form"> <span data-subir="15">Igredientes</span></label>
                            <textarea name="" id="" cols="20" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form"> <span data-subir="16">Preparacion </span></label>
                            <textarea name="" id="" cols="20" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="imgs-forms">
                            <label for="img-receta" class="label-form container-bom" > <span data-subir="17">Imagen</span></label>
                            <input type="file" class="img-input" id='img-receta' name='img-receta'>
                        </div>

                        <input type="submit" class="submit-form">

                    </div>
                </div>
            </form>

        </div>

    </main>



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