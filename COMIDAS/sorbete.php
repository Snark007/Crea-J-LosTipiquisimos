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
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>
    <title>Soorbete</title>
</head>

<body>
       <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/sorbete.jpg" alt="">
            <div class="recetas-letras">
                <h1>SORBETE ARTESANAL</h1>
                <p>
                    ¿Qué es un sorbete artesanal?
                    Los Sorbetes Artesanos se caracterizan por no contener productos lácteos en su elaboración.
                     En Helados Palacio fabricamos los sorbetes artesanos con las mejores frutas y verduras obteniendo un sabor único y exclusivo.
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
                    <li> 2 plátanos</li><br>
                    <li> 2 naranjas</li><br>
                    <li> 2 limones</li><br>
                    <li> 175g de azúcar</li><br>
                    <li> 1 clara de huevo</li><br>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Poner la nevera en el punto más frío y colocar en las baldas más bajas todo aquello que no queremos que se congele.</li><br>
    
                    <li>Cortar una rebanada fina de la parte de debajo de los cítricos para que se asienten bien. Cortar otra rebanada más gruesa de la parte superior hasta que se vea la pulpa.</li><br>
        
                    <li>Sacar la pulpa con una cucharilla, sin romper la cáscara. Reservar ambas cosas.</li><br>
        
                    <li>Hacer dos cortes paralelos a lo largo de los plátanos, un poco más arriba de la mitad, y quitar la parte superior de la cáscara. Sacar el plátano con una cucharilla. Reservar la piel.</li><br>
    
                    <li>Aplastar los plátanos con el tenedor hasta hacerlos puré.</li><br>
    
                    <li>Triturar en la batidora la pulpa de las naranjas y limones. Colar y añadir el azúcar y el puré de plátanos. Mezclar bien.</li><br>
    
                    <li>Verter esta mezcla en la bandeja de hielo o un molde, tapar y ponerla en el congelador durante 1 hora o hasta conseguir consistencia de nieve blanda.</li><br>
    
                    <li>Batir la clara de huevo a punto de nieve flojo. Sacar el helado del congelador, batirlo y mezclarlo con la clara a cucharadas, batiendo a cada vez.</li><br>
    
                    <li>Si se va a servir en las cáscaras, rellenarlas con el helado (las de plátano también) y ponerlas de nuevo en el congelador durante 2 horas, o hasta que esté firme.</li><br>
    
                    <li>Si se va a servir en copas, poner en el molde, taparlo y congelar durante media hora o hasta que esté firme.</li><br>

                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
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