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
    <script defer src="../Js/translate_recetas-res.js"></script>
    <title>Sopa de res</title>
</head>

<body>
     <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/sopa de res.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-res="1">SOPA DE RES<span></h1>
                <p>
                <span data-res="2">Una de las sopas mas populares en El Salvador no solo por su sabor que es exquisita, sino que también por ser una receta fácil de preparar y que ha ido pasando de generación en generación.<span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-res="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li> <span data-res="4">2 Gallinas indias <span></li>
                    <li><span data-res="5"> media Libra hueso de res de preferencia con carne<span></li>
                    <li><span data-res="6"> 1 Libra de costilla de res<span></li>
                    <li><span data-res="7"> 1 Tomates grandes<span></li>
                    <li> <span data-res="8">1/2 Chile verde<span></li>
                    <li> <span data-res="9">1/2 Cebolla blanca grande<span></li>
                    <li><span data-res="10"> Agua para el caldo <span></li>
                    <li> <span data-res="11">3 Dientes de ajo<span></li>
                    <li><span data-res="12"> 1 Manojo de olor como cilantro, apio, hierbabuena, alcapate<span></li>
                    <li><span data-res="13"> 1 Limón<span></li>
                    <li><span data-res="14"> Sal al gusto<span></li>
                    <li><span data-res="15"> Pimienta al gusto<span></li>
                    <li><span data-res="16"> 2 yucas grandes<span></li>
                    <li><span data-res="17"> 2 güisquiles<span></li>
                    <li><span data-res="18"> Ejotes al gusto<span></li>
                    <li><span data-res="19"> 2-3 Elote<span></li>
                    <li><span data-res="20"> 1/2 Repollo<span></li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-res="21">Preparación:<span></h1>
                <ol>
                    <li><span data-res="22">
                        En una olla de preferencia grande colocar el  agua y dejar hervir con el hueso de res  a fuego medio cuando esté hirviendo dejar medio destapado durante 20-25 minutos.<span>
                        </li><br>
        
                    <li><span data-res="23">Cuando esté hirviendo agregarles las hierbas aromáticas como el cilantro, apio, perejil junto con el tomate, cebolla y los dientes de ajo, tapamos y dejamos cocinar durante 20 minutos, recuerda verificar cada cierto tiempo el nivel de agua y agregar más si fuese necesario.<span></li><br>
        
                    <li><span data-res="24">Mientras se cocina el hueso, vamos a partir las verduras en porciones pequeñas 
                        para facilitar la cocción, estas se irán incorporando conforme al nivel de cocción que necesite más tiempo.
                        <span>
                        </li><br>
        
                    <li><span data-res="25">Recuerda que la yuca y el elote son los que toman más tiempo para su cocción, una vez estén suaves se le agrega el resto de verduras.<span></li><br>
    
                    <li><span data-res="26">Revuelve regularmente para evitar que se adhiera al fondo.<span></li><br>
    
                    <li><span data-res="27">Ajusta el agua cuando sea necesario y cuando el arroz esté muy blando agrega la leche y la mitad del azúcar.<span></li><br>
    
                    <li><span data-res="28">Cuando empiece a hervir agrega las pasas y el azúcar restante.<span></li><br>
    
                    <li><span data-res="29">Cuando tenga una consistencia muy espesa, casi sólida, retira del fuego y vierte inmediatamente en tazones pequeños o copas para helado.<span></li><br>
    
                    <li><span data-res="30">Espolvorea con nuez moscada moscada molida y deja refrescar.<span></li><br>
    
                    <li><span data-res="31">Pon en el refrigerador por 30 minutos antes de servir.<span></li>

                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-res="32"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>