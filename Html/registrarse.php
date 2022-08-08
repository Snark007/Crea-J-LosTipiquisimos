<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registarse</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/registro.css">
    <link rel="stylesheet" href="../Css/traducir_iniciar.css">
  <script defer src="../Js/translate_ingresar.js"></script>
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
    <img src="../Img/cocineromejorado.png" class="avatar" alt="Avatar Image">
    <h1> <span data-ingresar="1"> Registarse</span></h1>
    <form action="../Html/db.php" method="post">
      <!--nombre -->
      <label for="username"><span data-ingresar="2">Digite su nombre</span></label>
      <input type="text" name="nombre" placeholder="Nombre" class="difun" required id="translata">
      <!-- apellidos -->
      <label for="username"><span data-ingresar="3">Digite su nombre de usuario</span></label>
      <input type="text" name="usu" placeholder="Usuario" class="difun" required id="translate">
      <!-- correo -->
      <label for="username"><span data-ingresar="4">Digite su correo</span></label>
      <input type="email" name="corre" placeholder="correo" class="difun" required id="translati">
      <!--Contraseña -->
      <label for="password"><span data-ingresar="5">Contraseña</span></label>
      <input type="password" name="contra" placeholder="Ingrese su contraseña" required id="translato">
      <!-- index-->

      <button type="submit" name="enviar"><span data-ingresar="6">registrarse</span></button>

      <!--No tienes -->
      <a href="../Html/Iniciarsecion.php" class="boton"><span data-ingresar="7">Ya tienes cuenta ¿Inicia sesión?</span></a>
    </form>
  </div>
</body>

 
</body>
</html>