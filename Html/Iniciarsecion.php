<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <link rel="icon" href="../Img/cocina.png">
  <link rel="stylesheet" href="../Css/iniciarsecion.css">
  <link rel="stylesheet" href="../Css/cuadros.css">
  <link rel="stylesheet" href="../Css/footer.css">
  <link rel="stylesheet" href="../Css/traslade-iniciar.css">
</head>

<body>
<div class="wrapper-caja">
        <div class="caja">
            <b><p class="caja__texto" id="elegir">Elegir idioma</p></b>
            <img src="./arrow.svg" alt="" class="caja__arrow">
        </div>
        <div class="options">
            <div class="pais" id="idioma-español" onclick="traducir(this)">
                <img src="./es.webp" alt="">
                <p>España</p>
            </div>
            <div class="pais" id="idioma-ingles" onclick="traducir(this)">
                <img src="./en.webp" alt="" >
                <p>English</p>
            </div>
        </div>
    </div>
 
  <div class="login-box">
    <img src="../Img/cocineromejorado.png" class="avatar" alt="Avatar Image">
    <h1>Inicio de sesión</h1>
    <form>
      <!-- Usuario -->
      <label for="username">Usuario</label>
      <input type="text" placeholder="Ingrese su usuario" class="difun" required>
      <!--contra -->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Ingrese su contraseña" required>
      <!-- secion -->
      <a href="../Html/Index.php">
        <input type="button" value="Iniciar" required>
        </a> 
      <!-- registrase -->
      <a href="../Html/registrarse.php">No tienes cuenta ¿Registrarse?</a>
    </form>
  </div>
  


</body>
</html>