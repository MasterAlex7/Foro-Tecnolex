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
$nom= $_POST['nombre'];
$pass= $_POST['pass'];
$pass2= $_POST['pass2'];


include ("MysqlConn.php");
    $conexion=conectar();

    $sql="UPDATE usuarios SET pass='$pass' WHERE nombre='$nom'";

    if($pass=="" && $pass2==""){
        ?>
        <div><h1>Campos de contraseña vacios</h1></div>
        <?php
    }else{
        if($pass==$pass2){
            if($conexion->query($sql)==TRUE){
                ?>
                <div><h1>Cambiado Correctamente</h1></div>
                <?php
                header( "refresh:3;url=admuser.php" );
                //echo "New record created succesfuly";
            }else{
                ?>
                <div><h1>Error en base de datos</h1></div>
                <?php
                //echo "Error: ". $sql . "<br>". $conexion->error;
            }
            }else{
                ?>
                <div><h1>Las contraseñas no coinciden</h1></div>
                <?php
                //echo "No coinciden las contraseñas";
            }
    }

    

    mysqli_close($conexion);
?>
</body>
</html>