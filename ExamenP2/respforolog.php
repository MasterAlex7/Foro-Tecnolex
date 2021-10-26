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
    <a href="nuevotemaforo.php">Nueva Entrada</a>
    </div>
    <div class="nombre">
        <?php
        echo $_SESSION['nombre'];
        ?>
    </div>

    <div class="caja">
        <?php
        //echo $_GET['id'];
        $idcon=$_GET['id'];
        include ("MysqlConn.php");
        $conexion=conectar();

        ?>
        <h3>Respuestas para: </h3>
        <?php
        $sql2 = "SELECT * FROM consultas where id='$idcon'";
        $result2 = $conexion->query($sql2);
        $row2 = $result2->fetch_assoc();
        ?>
        <h3>"<?php echo $row2['nombre']; ?>"</h3>
        <?php


        $sql = "SELECT * FROM respuestas where idconsul='$idcon'";
        $result = $conexion->query($sql);

        while ($row = $result->fetch_assoc()) {
            ?>
            <table border=1 cellspacing=1>
                <tr>
                    <td><h3><?php echo $row['respconsul'] ?></h3></td><br>
                </tr>
            </table>
            <?php
            if($row['autor']==$_SESSION['nombre']){
                ?>
                <span style="color: red;"><a href="eliminarresp.php?id=<?php echo $row['idconsul']; ?>">Eliminar</a></span>
                <?php
            }
        }
        ?>
        <div class="caja3"><a href="nuevaresp.php?id=<?php echo $idcon;?>">Añadir nueva Respuesta</a></div>
    </div>
</body>
</html>