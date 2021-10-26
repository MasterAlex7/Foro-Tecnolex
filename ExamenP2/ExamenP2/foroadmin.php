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

    <div class="admin">
        <a href="admuser.php">Users Admin</a>
    </div>

    <div class="nombre">
        <a href="cerrar_sesion.php" style="text-decoration: none; color: #123173;"><?php echo $_SESSION['nombre'];?></a>
    </div>

    <div class="caja">
    <p><h2>Bienvenido <?php echo $_SESSION['nombre'] ?><br> Estas son las consultas:</h2><br></p>
        <?php
        include ("MysqlConn.php");
        $conexion=conectar();
    
        $sql = "SELECT * FROM consultas";
        $result = $conexion->query($sql);

        while ($row = $result->fetch_assoc()) {
            ?>
            <span><p> <?php echo $row['fecha'] ?> </p></span>
            <a href="respforoadmin.php?id=<?php echo $row['id'];?>"> <h3><?php echo $row['nombre'] ?></h3></a>
            <span class="eliminacion"><p><a href="eliminarconsulta.php?id=<?php echo $row['id'];?>">Eliminar</a></p></span>
            <?php
        }
        ?>
    </div>
</body>
</html>