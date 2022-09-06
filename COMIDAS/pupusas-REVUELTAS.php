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
    <script defer src="../Js/translate_recetas-pupupusarevuelta.js"></script>
    <title>Pupusa frijol con queso</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/pupusas de frijol con queso.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-pupusar="1">PUPUSA REVUELTA</span></h1>
                <p>
                <span data-pupusar="2">
                    Las pupusas son un platillo tradicional de El Salvador, existen de diferentes rellenos, en este caso te dejamos la receta de pupusas con frijos y queso, 
                    sin embgardo puedes hacerla solo de queso o frijoles, con chicharrones, etc. Es importante que tengas a tu disposición 1 plancha para poder realizarlas y
                     que queden bien doraditas.</span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-pupusar="3">Ingredientes:</span></h1>
                <p>
                <ul type="square">
                    <li> <span data-pupusar="4">Medio kilo de harina de maíz o de arroz</span></li>
                    <li> <span data-pupusar="5">Agua tibia</span></li>
                    <li> <span data-pupusar="6">Queso quesillo</span></li>
                    <li> <span data-pupusar="7">Frijoles molidos fritos.</span></li>
                    <li><span data-pupusar="8"> Sal</span></li>
                    <li> <span data-pupusar="9">Aceite</span></li>
                    <li> <span data-pupusar="10">Chicharron</span></li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-pupusar="11">Preparación:</span></h1>
                <ol>
                    <li><span data-pupusar="12">El primer paso a realizar, es la elaboración de la masa, para lo que necesitaremos una taza, donde servirás medio kilo de harina de 
                        maíz o arroz ( o la cantidad que gustes, al final nunca es mucha) y agrega agua tibia. Para unir ambos ingredientes, debes usar tus manos,
                         amasando constantemente para que no queden grumos.</span></li><br>
        
                    <li><span data-pupusar="13">Si al amasar notamos que la masa está algo dura, agregaremos un poco más de agua junto con algo de sal para dar sabor. Finalmente,
                         nuestra masa no debe quedar ni tan aguada ni tan dura, de modo que puedas hacer una pelotita con ella y no se desmorone.</span></li><br>
        
                    <li><span data-pupusar="14">Debes tener un envase con agua y aceite, el cual te ayudará a dar forma a las pupusas, de manera que la masa no se pegue a tus manos.
                         Ahora, con las manos humedecidas, debes tomar una pelotita de masa y con ambas manos la vas aplanando hasta que quede como una tortilla.</span></li><br>
        
                    <li><span data-pupusar="15">Mientras das forma a la masa, debes ir humedeciendo tus manos en el agua. Si se te hace complicado, puedes utilizar tus dedos para hacer
                         en el centro una pequeña hendidura, donde colocarás el relleno. Tomando un poco de frijoles revueltos previamente con el quesillo y el chicharron</span></li><br>
    
                    <li><span data-pupusar="16"> Una vez que has colocado el relleno, se procede a envolver, dando forma de esférica. Finalmente, vuelves a aplanar y se coloca la pupusa 
                        en un comal o plancha bien caliente.  Después de un rato, debes voltear con una espátula, de forma que no se pasen de cocción. Eso sí,
                         cada vez que des vuelta a las pupusas debes mojar la espátula en el agua con aceite, así será más fácil. Con esto, ya estás listo para degustar unas ricas pupusas totalmente salvadoreñas.</span></li><br>

                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; <span data-pupusar="17">Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>