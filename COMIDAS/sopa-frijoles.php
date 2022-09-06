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
    <script defer src="../Js/translate_recetas-sopfrijoles.js"></script>
    <title>Sopa de frijoles</title>
</head>

<body>
     <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/sopa-de-frijole.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-sopfrijoles="1">SOPA DE FRIJOLES</h1>
                <p><span data-sopfrijoles="2">
                    La preparación de la Sopa de Frijoles es muy versátil, puedes gastar poco tiempo y dinero o mucho, 
                    todo depende de tus recursos.  Toma en cuenta que la sopa tradicional de El Salvador solo requiere de la base fundamental,
                     frijoles rojos, agua y solo un poco de sal, pese a esto si quieres invertir más puede agregarle desde verduras hasta carnes rojas.
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-sopfrijoles="3">Ingredientes:</h1>
                <p>
                <ul type="square">
                    <li> <span data-sopfrijoles="4">2 libras de frijoles rojos de seda</li>
                    <li> <span data-sopfrijoles="5">2 libras de hueso de cerdo</li>
                    <li> <span data-sopfrijoles="6">Tomate</li>
                    <li> <span data-sopfrijoles="7">1 cabeza de ajo</li>
                    <li> <span data-sopfrijoles="8">Cilantro</li>
                    <li> <span data-sopfrijoles="9">Consomé de costilla </li>
                    <li> <span data-sopfrijoles="10">1 cebolla pequeña</li>
                    <li> <span data-sopfrijoles="11">Sal al gusto</li>
                    <li> <span data-sopfrijoles="12">Agua para el caldo </li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-sopfrijoles="13">Preparación:</h1>
                <ol>
                    <li>
                    <span data-sopfrijoles="14">Yo te recomiendo poner los frijoles en agua desde un día antes de hacer la sopa, aunque no es estrictamente necesario.
                        </li><br>
        
                    <li><span data-sopfrijoles="15">Lo primero que debes hacer es picar el tomate en pequeños trozos. Luego también el chile, cilantro y la cebolla picada en pequeños trozos y dejarlos todo juntos en un recipiente. </li><br>
        
                    <li><span data-sopfrijoles="16">Ponemos los frijoles en agua a cocinar a fuego medio. Encima de los frijoles echamos los huesos de cerdo. 
                        </li><br>
        
                    <li><span data-sopfrijoles="17">Después le echamos los ingredientes picados que tenemos en el recipiente y lo echamos a la olla junto a los frijoles y los huesos.</li><br>
    
                    <li><span data-sopfrijoles="18">Luego le echamos los dientes de ajos ya pelados. y revolvemos para que todo se disperse bien en toda la olla.</li><br>
    
                    <li><span data-sopfrijoles="19">Ahora esperamos que los frijoles se ablanden, este proceso puede durar 2 horas o más, así que toca esperar. </li><br>
    
                    <li><span data-sopfrijoles="20">Una vez los frijoles estén blandos es momento de echarle el consomé de costilla y sal al gusto, puedes ir echándole sal de a poco e ir revolviendo hasta encontrar el punto deseado.</li><br>
    
                    <li><span data-sopfrijoles="21">Unos minutos después de echarle la sal y el consomé la sopa estará lista para consumir, retiramos del fuego y servimos.</li>

                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; <span data-sopfrijoles="22">Los Tipiquisimos 2022-Derechos reservados</p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>