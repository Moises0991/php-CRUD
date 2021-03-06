<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> <!--se emplean fuentes de google fonts, especificamente de la familia open sans-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> <!--se emplea bootstrap desde la nube-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> <!--se emplea libreria ajax-->

</head>
<body>
    <div class="wrapper">
        <form  action="sesiones/checklogin.php" method="POST" class="login">
            <p class="title">Iniciar sesión</p>
            <input type="text" placeholder="Usuario" autofocus autocomplete="on" name="username" id="username">
            <i class="fa fa-user"></i>
            <input type="password" placeholder="Contraseña" name="password" id="password">
            <i class="fa fa-key"></i>
            <a href="err/index.html">He olvidado mi contraseña</a>
            <button type="submit" name="submit">
                <i class="spinner"></i>
                <span class="state">Ingresar</span>
            </button>
        </form>
        <footer><a target="blank" href="Crud/registrar.php">Registrarse</a></footer>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/login.js"></script>
</body>
</html>