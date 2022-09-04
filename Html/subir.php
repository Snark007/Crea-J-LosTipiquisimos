<?php
    session_start();
    if( !isset($_SESSION['aña']) ){
        header("location:iniciarsecion.php");
        
    }
    
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/subirRecetas.css">
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
            <h1 class="instructions-title"> <span data-subir="1"> Quieres subir tus receta debes realizar los siguientes pasos al pie de la
                    letra como te indican. </span></h1>

            <div class="instructions-pasos">
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3> <span data-subir="2">Para empezar.</span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="3">Primero ingresa el nombre de tu recetas de forma presisa como: pupusas de queso con loroco.</span></p>
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
                            <h3> <span data-subir="4"> Despues de eso.</span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="5">Tendrás que poner una breve descripción de tus receta que anterior mente avías mencionado.</span> </p>
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
                            <h3> <span data-subir="6"> Una vez ya hecho el punto anterior. </span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="7">Ingresa los igredientes de tu receta. Cada ingrediente al finalizae tendra que dijitar un "Enter" y al iniciar con un "-" por motivos de separación.</span></p>
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
                            <h3> <span data-subir="8"> Ahora tienes que. </span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="9">Poner como lo preparastes para que los demas usuarios puedan seguir la receta al pie de la letra. Por cada paso deberan de dar un espaciado con un enter y por cada instrucción deberan númerarla. </span> </p>
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
                            <h3> <span data-subir="10"> Ya para terminar. </span></h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p> <span data-subir="11"> Solo tienes que poner poner una imagen de referencia como que te tiene que quedar. </span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="form">

            <form action="v-subir.php" method="POST" enctype="multipart/form-data" onsubmit="addNewLines()">
                <div class="wrapper-form">
                    <h2 class="instructions-title"> <span data-subir="12"> Solicitud de recetas</span></h2>

                    <div class="form-inputs">

                        <div class="inputs-form">
                            <label for="nombre-receta" class="label-form"> <span data-subir="13">Nombre de la receta</span> </label>
                            <input type="text" name="nombre" required class="input">
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form"> <span data-subir="14">Descripcion</span></label>
                            <textarea name="desc" id="" cols="20" rows="5" required class="textarea"></textarea>
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form"> <span data-subir="15">Igredientes</span></label>
                            <textarea name="ingre" id="levi" cols="20" rows="5" required class="textarea"></textarea>
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form"> <span data-subir="16">Preparacion </span></label>
                            <textarea name="proce" id="" cols="20" rows="5" required class="textarea"></textarea>
                        </div>
                        <div class="imgs-forms">
                            <label for="img-receta" class="label-form-container-bom" > <span data-subir="17">Imagen</span></label>
                            <input type="file" class="img-input" id='img-receta' required name='img-receta'>
                        </div>

                        <button type="submit" class="submit-form">Enviar</button>

                    </div>
                </div>
            </form>

        </div>

    </main>



    <!--PIE DE PAGINA-->
    <footer>
        <div class="contar">
            <h3 class="log"> <span>Los Tipiquisimos</span> </h3>
            <p>&copy; <span> Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>