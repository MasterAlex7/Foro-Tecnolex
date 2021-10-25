<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/styles.css">
    <title>Tecnolex</title>

</head>
<body>
    <div class="title">
        <h1>Tecnolex</h1>
    </div>
    <section class="form-register">
        <h4>Inicia Sesion</h4>
        <form action="procesarlogin.php" method="post">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre de usuario">
            <input class="controls" type="password" name="pass" id="pass" placeholder="Ingresa tu contraseña">
            <input class="butons" type="submit" value="Iniciar Sesion" >
        </form>
        <p>Si quieres continuar como invitado <a href="#">aqui</a></p>
    </section>
</body>
</html>