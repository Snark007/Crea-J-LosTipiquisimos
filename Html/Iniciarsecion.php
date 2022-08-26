<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <link rel="icon" href="../Img/cocina.png">
  <link rel="stylesheet" href="../Css/iniciarsecion.css">
  <link rel="stylesheet" href="../Css/footer.css">
  <link rel="stylesheet" href="../Css/traducir_iniciar.css">
  <script defer src="../Js/translate_iniciar.js"></script>
</head>

<body>

<div class="wrapper-menu">
        <div class="btn-translate-hide wrapper-caja ">
            <div class="caja">
                <b>
                    <p class="caja__texto" id="elegir" data-inicio="1">Elegir idioma</p>
                </b>
                <img src="../Img/translateIcons/arrow.svg" alt="" class="caja__arrow ">
            </div>
            <div class="options">
                <div class="pais" id="idioma-español" onclick="traducir(this)">
                    <img src="../Img/translateIcons/es.webp" alt="">
                    <p data-inicio="2">España</p>
                </div>
                <div class="pais" id="idioma-ingles" onclick="traducir(this)">
                    <img src="../Img/translateIcons/en.webp" alt="">
                    <p data-inicio="3">Ingles</p>
                </div>
            </div>
        </div>

<div class="login-box">
 <a href="../Html/Index.php"><img  src="../Img/cocineromejorado.png" class="avatar" alt="Avatar Image"></a>
    <h1> <span data-inicio="4"> Inicio de sesión</span></h1>
    <form  action="verificar.php" method="POST">
      <!-- Usuario -->
      <label for="username"><span data-inicio="5"> Usuario</span></label>
      <input type="text" name="usuario"placeholder="Ingrese su usuario" class="difun" required data-inicio="6" id="translate">
      <!--contra -->
      <label for="password"><span data-inicio="7"> Contraseña</span></label>
      <input type="password" name="contrasenia" placeholder="Ingrese su contraseña" required data-inicio="8" id="translato">
      <!-- secion -->
      <button type="submit" value="Iniciar" required><span data-inicio="9"> iniciar sesion</span></button>
      <!-- registrase -->
      <a href="../Html/registrarse.php"><span data-inicio="10"> No tienes cuenta ¿Registrarse?</span></a>
    </form>
  </div>
  


</body>
</html>