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
        <h4>Registrate</h4>
        <form action="procesarreg.php" method="post" name="form1">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre de usuario">
            <input class="controls" type="password" name="pass" id="pass" placeholder="Ingresa tu contraseña">
            <input class="controls" type="password" name="pass2" id="pass" placeholder="Confirma tu contraseña">
            <input class="butons" type="submit" value="Registrarse">
        </form>
        <p>Si ya tienes cuenta da click <a href="login.php">aqui</a></p>
        <p>Si quieres continuar como invitado <a href="#">aqui</a></p>
    </section>
</body>
</html>
