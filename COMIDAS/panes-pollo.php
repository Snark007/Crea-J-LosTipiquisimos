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
    <script defer src="../Js/translate_recetas-panpollo.js"></script>
    <title>Panes con pollo</title>
</head>

<body>
      <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/pan-pollo.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-panpollo="1">PANES CON POLLO</span></h1>
                <p>
                <span data-panpollo="2">
                Muy ricos aperitivos de El Salvador que podemos degustar de forma tradicional en fiestas patrióticas o en las fiestas decembrinas. La alternativa ideal para conocer la gastronomía de la tierra centroamericana, que envuelve con su deliciosa salsa de pollo, sazón salvadoreña
                    </span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-panpollo="3">Ingredientes:</span></h1>
            <p>
                <ul type="square">
                <li> <span data-panpollo="4">panes (tipo francés)</span></li><br>
                <li><span data-panpollo="5"> pechuga de pollo de preferencia</span></li><br>
                <li><span data-panpollo="6"> Tomates</span></li><br>
                <li><span data-panpollo="7"> Pepino</span></li><br>
                <li><span data-panpollo="8">Lechuga romana</span></li><br>
                <li><span data-panpollo="9"> Repollo</span></li><br>
                <li><span data-panpollo="10"> Mayonesa</span></li><br>
                <li><span data-panpollo="11"> Zanahorias</span></li><br>
                <li><span data-panpollo="12"> Cebolla</span></li><br>
                <li><span data-panpollo="13"> Hojitas de laurel</span></li><br>
                <li><span data-panpollo="14"> Margarina</span></li><br>
                <li><span data-panpollo="15"> Vinagre</span></li><br>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-panpollo="16">Preparación:</span></h1>
                <ol>
                <li><span data-panpollo="17">Limpia el pollo y córtalo en partes, condiméntalo a tu gusto y déjalo uno minutos para que se
                     adhiera el sabor, cóselo a fuego lento, guarda su consomé, una vez seco separa el consomé del
                      pollo y sofríe el pollo hasta que dore, junta el consomé en la licuadora con los tomates, la cebolla, el ajo y salpimienta.</span></li><br>
    
                <li><span data-panpollo="18">Júntalo con el pollo y sofríe hasta que la salsa quede completamente cocida</span></li><br>
    
                <li><span data-panpollo="19">Luego corta la zanahoria, el pepino y puedes agregar coliflor para crear escabeche, agrega la 
                    margarina y el vinagre luego remoja con mayonesa</span></li><br>
    
                <li><span data-panpollo="20">Lo último es cortar el pan agrega mayonesa en ambos lados, incluye la salsa de pollo, y
                     rellénalo con el pollo y el resto de ingredientes a tu gusto</span></li>
            </ol>        
            </div>
        </div>
    </section>
      <!--::::Pie de Pagina::::::-->
      <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-panpollo="21"> Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img
                    src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt=""
                    class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt=""
                    class="Photographs"></a><br>
        </div>
    </footer>
</body>
</html>