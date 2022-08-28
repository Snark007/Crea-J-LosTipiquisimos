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
    <script defer src="../Js/translate_recetas-tamalelote.js"></script>
    <title>Tamal de elote</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/tamales-de-elote.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-tamalelote="1">TAMAL DE ELOTE<span></h1>
                <p><span data-tamalelote="2">
                    Acá te explicamos paso a paso la preparación de los tradicionales tamales de elotes, que tanto gustan. El exquisito sabor del maíz es lo que caracteriza este plato.<span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-tamalelote="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-tamalelote="4"> Elotes de preferencia frescos y que no estén tiernos<span></li>
            <li><span data-tamalelote="5"> ¼ taza de leche entera<span></li>
            <li><span data-tamalelote="6"> ¼ taza de manteca tienes que derretirlas<span></li>
            <li><span data-tamalelote="7"> hojas de tusa de elote<span></li>
            <li> <span data-tamalelote="8">Azúcar al gusto<span></li>
            <li> <span data-tamalelote="9">Sal al gusto <span></li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-tamalelote="10">Preparación:<span></h1>
                <ol>
                    <li><span data-tamalelote="11">
                        Como primer paso vamos a desgranar nuestros elotes para luego molerlos de preferencia en un molino industrial para que sea más fácil también puedes hacerlo en un molino casero o licuadora, tiene que quedar una masa fina.<span>
                        </li><br>
        
                    <li><span data-tamalelote="12">Cuando tenemos nuestra masa fina le incorporamos la leche, el azúcar y unos granitos de sal, revolvemos bien todos los ingredientes y dejamos por último la manteca hasta que se incorporen bien todos los ingredientes.<span></li><br>
        
                    <li><span data-tamalelote="13">En este paso puedes agregar los chicharrones para darle un toque delicioso.<span>
                        </li><br>
        
                    <li><span data-tamalelote="14">Con las hojas de tusa vamos agregar dos o tres cucharadas de la masa y los enrollamos, con las puntas vamos a doblar para que queden cerrados.<span></li><br>
    
                    <li><span data-tamalelote="15">En una olla grande vamos agregar en el fondo una cama de tamales para luego colocar los demás en forma vertical, agregamos suficiente agua pero que no cubra por completo los tamales y cocinamos durante unos 30 minutos.<span></li><br>
    
                    <li><span data-tamalelote="16">Tapamos con las hojas para que conserve aún más el sabor, listo transcurrido el tiempo verificamos que la hoja esté de color amarilla este nos indicará que están en su punto, servimos y disfrutamos con un toque de crema. <span></li><br>

                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-tamalelote="17"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>