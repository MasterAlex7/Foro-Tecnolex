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
        <h4>Eliminar Usuario</h4>
        <form action="procesardelete.php" method="post" name="form1">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre de usuario">
            <input class="butons" type="submit" value="Eliminar">
        </form>
    </section>
</body>
</html>