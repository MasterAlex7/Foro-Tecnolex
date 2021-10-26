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
        $resp= $_POST['resp'];
        $id=$_POST['id'];
        $autor=$_SESSION['nombre'];
        /*echo $resp;
        echo $id;*/

        include ("MysqlConn.php");
        $conexion=conectar();

        $sql="INSERT INTO respuestas (idconsul,respconsul,autor) VALUES ('$id','$resp','$autor')";
        if($conexion->query($sql)==TRUE){
            ?>
            <h3>Tu respuesta fue subida Correctamente</h3>
            <?php
            header( "refresh:3;url=respforolog.php?id=$id" );
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