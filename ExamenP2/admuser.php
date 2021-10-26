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
        Este es el Adminitrador de Usuarios <br>
        ¿Que deseas hacer?
    </div>

    <br><br><br>
        <div class="añadir">
        <a href="addusr.php">Añadir</a>
        </div>

        <br>

        <div class="eliminar">
        <a href="deleteusr.php">Eliminar</a>
        </div>

        <div class="listar">
        <a href="edituser.php">Editar</a>
        </div>
        <br>
        <br>
        <?php
    include "MysqlConn.php";
    $conexion = conectar();

    $sql = "SELECT * FROM usuarios";
    $result = $conexion->query($sql);
    ?>
    <h1 align=center>Usuarios: </h1>
    <table border=1 cellspacing=1 align="center">
                <tr>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><h3><?php echo $row['nombre']; ?></h3></td>
                <td><h3><?php echo $row['pass']; ?></h3></td>
            </tr>
            <?php
            }
            ?>
            </table>
            <?php
?>
    </div>

</body>
</html>