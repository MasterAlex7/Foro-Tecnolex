<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estilosforo.css">
    <title>Tecnolex</title>

</head>
<body>
    <div class="title">
    <h1><a href="forolog.php">Tecnolex</a></h1>
    </div>
    <div class="bienve">
        Hola
    </div>
    <div class="caja2">
        <a href="">Nueva Entrada</a>
    </div>
    <div class="nombre">
        <?php
        echo $_SESSION['nombre'];
        ?>
    </div>

    <div class="caja">
    <section class="form-register">
        <h4>Nueva Pregunta</h4>
        <form action="procesarnuevotema.php" method="post" name="form1">
            <input class="controls" type="text" name="nomentry" id="nomentry" placeholder="Cual es tu pregunta">
            <textarea class ="controls" name="entry" id="entry" cols="30" rows="10" placeholder="Escribe aqui la pregunta"></textarea>
            <input class="butons" type="submit" value="Subir Pregunta">
        </form>
    </section>
    </div>
</body>
</html>