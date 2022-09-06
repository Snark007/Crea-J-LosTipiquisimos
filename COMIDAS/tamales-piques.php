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
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_recetas-tamal1.js"></script>
    <title>Tamales de piques</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/tamales-pisques.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-tamal1="1">TAMAL DE PIQUE<span></h1>
                <p>
                <span data-tamal1="2">
                    Los tamales de frijol es muy típica en mi pueblo, ademas de tener un rico sabor, son muy económicos y la podemos acompañarlos con un rico taza de cafe.

                    Como ingrediente principal ocuparemos frijol y nixtamal, El nixtamal consiste en la adición de una solución de cal a una porción de maíz.<span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-tamal1="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-tamal1="4"> 2 libras de maíz <span></li><br>
                    <li><span data-tamal1="5">3 tazas de frijoles molidos y fritos<span></li><br>
                    <li><span data-tamal1="6"> 1/2 Libra de manteca <span></li><br>
                    <li><span data-tamal1="7"> Sazonador de pollo y sal al gusto <span></li><br>
                    <li><span data-tamal1="8"> Hojas de huerta para cubrirlos<span></li><br>
                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-tamal1="9">Preparación:</h1>
                <ol>
                    <li><span data-tamal1="10">
                        Lo primero es cocer el maíz un día antes y molerlo en molino de nixtamal para obtener la masa, aunque también se puede hacer con harina de maíz.
                        <span>
                    </li><br>

                    <li><span data-tamal1="11">A la masa de maíz le agregamos un poco de agua, de manera que no quede ni muy dura ni muy aguada, también se le agrega sal al gusto, el sazonador de pollo y la manteca (si lo desea puede usar manteca de cerdo), luego debe cocinar esta masa. <span></li><br>

                    <li><span data-tamal1="12">El siguiente paso es preparar las hojas de huerta, que son indispensables para darles un mejor sabor a los tamales, sin embargo, necesitamos que estas hojas estén firmes y para ello debemos ponerlas en el sol hasta que se encuentren un poco tostadas, se recomienda lavar las hojas antes de ponerlas al sol, ya que podrían contener polvo.<span>
                    </li><br>

                    <li><span data-tamal1="13">Ahora comienza la preparación de los tamales pisques y para ello se corta un pedazo de hoja de unos 25 centímetros, se agregan dos cucharadas soperas de masa y en el centro se agrega una cucharada de frijoles, luego debe envolver estos ingredientes en la hoja, de manera que no se salga la masa y que quede bien firme, si lo desea puede usar papel plástico para cubrir la hoja del tamal.<span></li><br>

                    <li><span data-tamal1="14"> El último paso consiste en colocar los tamales en una olla al fuego, agregándole agua a la olla y dejándolos al fuego por un tiempo de una hora y media hasta que se encuentren bien cocidos.<span></li><br>
                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-tamal1="15"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>