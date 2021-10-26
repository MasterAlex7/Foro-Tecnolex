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
    <title>Procesando</title>
</head>
<body>
<?php  
    $nom=$_POST['nombre'];
    
    include ("MysqlConn.php");
        $conexion=conectar();

        $sql = "DELETE FROM usuarios where nombre='$nom'";
        $result = $conexion->query($sql);

        ?>
        <h2>Usuario Eliminado...</h2>
        <?php

        header( "refresh:2;url=admuser.php" );
?>
</body>
</html>