<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estiloslogout.css">
    <title>Tecnolex</title>

</head>
<body>
    <div class="title">
        <h1><a href="forolog.php">Tecnolex</a></h1>
    </div>
    
    <div class="caja">
    <div class="bienve">
        Hola
    </div>
    <div class="nombre">
        <?php
        echo $_SESSION['nombre'];
        ?>
        <br>
        Esta es la pagina de cerrar sesion <br>
        ¿Deseas hacerlo?
        
    </div>
    <br><br><br>
        <div class="caja2">
        <a href="logout.php?salir=false">Si, cerrar sesion</a>
        </div>

        <br>

        <div class="caja3">
        <a href="forolog.php">No, quiero seguir</a>
        </div>
    </div>
</body>
</html>