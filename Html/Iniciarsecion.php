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
</head>

<body>
 
<div class="login-box">
    <img src="../Img/cocineromejorado.png" class="avatar" alt="Avatar Image">
    <h1>Inicio de sesión</h1>
    <form  action="verificar.php" method="POST">
      <!-- Usuario -->
      <label for="username">Usuario</label>
      <input type="text" name="usuario"placeholder="Ingrese su usuario" class="difun" required>
      <!--contra -->
      <label for="password">Contraseña</label>
      <input type="password" name="contrasenia" placeholder="Ingrese su contraseña" required>
      <!-- secion -->
      <button type="submit" value="Iniciar" required>iniciar sesion</button>
      <!-- registrase -->
      <a href="../Html/registrarse.php">No tienes cuenta ¿Registrarse?</a>
    </form>
  </div>
  


</body>
</html>