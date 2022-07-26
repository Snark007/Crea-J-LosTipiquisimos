<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registarse</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/registro.css">
</head>
<body>
    <div class="login-box">
        <img src="../Img/cocineromejorado.png" class="avatar" alt="Avatar Image">
        <h1>Registarse</h1>
        <form>
          <!--nombre -->
          <label for="username">Digite su nombre</label>
          <input type="text" placeholder="Nombre" class="difun" required>
          <!-- apellidos -->
          <label for="username">Digite su nombre de usuario</label>
          <input type="text" placeholder="Usuario" class="difun" required>
          <!-- correo -->
          <label for="username">Digite su correo</label>
          <input type="email" placeholder="correo" class="difun" required>
          <!--Contraseña -->
          <label for="password">Contraseña</label>
          <input type="password" placeholder="Ingrese su contraseña" required>
          <!-- index-->
          <a href="../Html/Index.php">
            <input type="button" value="Iniciar">
            </a> 
          <!--No tienes -->
          <a href="../Html/Iniciarsecion.php" class="boton">Ya tienes cuenta ¿Inicia seción?</a>
        </form>
      </div>
</body>

 
</body>
</html>