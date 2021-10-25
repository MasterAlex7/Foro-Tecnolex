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
        include ("MysqlConn.php");
        $conexion=conectar();
        $idnuevo=$_GET['id'];

        $sql="SELECT * from consultas where id='$idnuevo' ";
        $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <h2 align="Center">Responder a: <?php echo $row['nombre']; ?></h2>
    <section class="form-register">
        <form action="procesarnuevaresp.php" method="post" name="form1">
            <input class="controls" type="text" name="resp" id="resp" placeholder="Respuesta">
            <input type="hidden" name="id" value="<?php echo $idnuevo?>" >
            <input class="butons" type="submit" value="Subir Pregunta">
        </form>
    </section>
    </div>
</body>
</html>