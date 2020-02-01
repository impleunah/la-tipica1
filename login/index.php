<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Estilo/estilos.css">
</head>
<body>
                
    <h1 class=" login">INICIAR SESIÓN</h1>
    
    <div class="adc">
        <Form action="login.php" method="post"> 
            <!-- texto de correo       -->
            <input type="text" name="correo" placeholder="Introdusca su Correo">
            <!-- Texto de passsword       -->
            <input type="password" name="contraseña" placeholder="Introdusca su Contraseña">
            <!--  boton       -->
            <input type="submit" value="Enviar">
        </Form>
        	<a href="registro.php">Registrate</a>
    </div>
</body>
</html>