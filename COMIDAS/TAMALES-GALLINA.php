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
    <script defer src="../Js/translate_recetas-tamalesgallina.js"></script>
    <title>Tamales de gallina</title>
</head>

<body>
     <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/tamales-de-pollo.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-tamal="1">TAMAL DE GALLINA<span></h1>
                <p>
                <span data-tamal="2"> Los tamales de pollo o gallina, son uno de los platos mas populares en El Salvador. Y son una tradición para fin de año o para casi todo tipo de fiesta.<span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-tamal="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-tamal="4">3 Lbs. de maíz<span></li><br>
                    <li><span data-tamal="5">2 Litros de agua o hasta cubrir el maíz <span></li><br>
                    <li><span data-tamal="6"> 1 gallina o 1 pollo <span></li><br>
                    <li><span data-tamal="7">2 cebollas medianas <span> </li><br>
                    <li><span data-tamal="8"> 3 tomates<span> </li><br>
                    <li><span data-tamal="9"> 2 chiles dulces <span> </li><br>
                    <li><span data-tamal="10"> 5 dientes de ajo <span></li><br>
                    <li><span data-tamal="11"> 1 zanahoria <span>  </li><br>
                    <li><span data-tamal="12"> 1 Lb. de papas,
                        sal y pimienta al gusto<span>
                         </li><br>
                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-tamal="13">Preparación:<span></h1>
                <ol>
                    <li>
                    <span data-tamal="14">Para la masa:<span>
                        </li><br><br>
        
                    <li><span data-tamal="15">En una olla grande se cuece el maíz durante más o menos 45 Minutos con el fuego medio (con una cucharada de cal) o hasta que esté blando, luego se lleva al molino, o se muele en casa en un molinillo casero o en la licuadora (no lo recomiendo mucho) hasta hacer una masa fina. Pero no le ponga mucha agua porque luego le vamos a agregar sopa de gallina. Si utiliza Maseca, simplemente diluya la harina con un poquito de agua y parte de la sopa del pollo o gallina, hasta lograr la consistencia deseada. <span></li><br>
        
                    
        
                    <li><span data-tamal="16">Armado de los tamales: <span></li><br><br>
    
                    <li><span data-tamal="17"> Antes de usar las hojas de plátano, hay que lavarlas, secarlas al sol para que se ablanden y desvenar. Cortar en rectángulos y poner dos trozos de hojas de plátanos, uno sobre otro, pero el de arriba en diagonal con respecto al de abajo, sobre ellos colocar una cucharada de masa, unos trozos de gallina, un poco de papa cocida, algunas alcaparras, unas aceitunas; salsear y tapar con otra cucharada de masa. Doblar la hoja donde apoya el relleno más cercano a Usted hacia arriba, sujeté los bordes laterales para que no se escurra el relleno y doblar nuevamente. Realice el mismo procedimiento con la otra hoja y envolver con papel. Cocción de los tamales: Para cocer los tamales, rellene el fondo de una olla profunda con bolas de papel o compre una olla especial para tamales las cuales ya traen un fondo especial, encima colocar los tamales y cubrir de agua, los tamales estarán cuando las hojas de plátano se cuezan, el tiempo aproximado es de 40 Minutos.<span></li><br>
                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-tamal="18"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>