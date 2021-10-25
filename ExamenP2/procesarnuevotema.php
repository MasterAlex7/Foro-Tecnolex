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
        <?php
        $nom= $_POST['nomentry'];
        $fecha=date('d-m-Y');
        $autor=$_SESSION['nombre'];

        include ("MysqlConn.php");
        $conexion=conectar();

        $sql="INSERT INTO consultas (nombre,fecha,autor) VALUES ('$nom','$fecha','$autor')";
        if($conexion->query($sql)==TRUE){
            ?>
            <h3>Tu consulta fue subida Correctamente</h3>
            <?php
            header( "refresh:3;url=forolog.php" );
            //echo "New record created succesfuly";
        }else{
            ?>
            <div><h1>Error en base de datos</h1></div>
            <?php
            //echo "Error: ". $sql . "<br>". $conexion->error;
        }
        ?>
    </div>
</body>
</html>