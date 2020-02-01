<?php

  require 'conectarbase.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO correo (correo, Contraseña) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'se a creado un usuario';
    } else {
      $message = 'No se pudo crear el usuario';
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../Estilo/estilos.css">
  </head>
  <body >

        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
            <?php endif; ?>

    
    <h1 class=" login">Registro</h1>
    
    <div class="adc">
                <form action="registro.php" method="POST">
                <input name="email" type="text" placeholder="Introdusca su Correo">
                <input name="password" type="password" placeholder="Introdusca su Contraseña">
                <input name="confirm_password" type="password" placeholder="Confirme su Contraseña">
                <input type="submit" value="Enviar">
                </form>
                <a href="index.php"> Login </a>
    </div>
        
  </body>
</html>
