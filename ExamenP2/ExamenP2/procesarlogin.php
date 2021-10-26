<?php
    session_start();
    $_SESSION['logueado'] = FALSE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/styles.css">
    <title>Logueado</title>
</head>
<body>
<?php
$nom= $_POST['nombre'];
$pass= $_POST['pass'];


include ("MysqlConn.php");
    $conexion=conectar();

    if(!$conexion){
        //echo "ERROR";
    }else{
        //echo "Conn ok";
    }

    $sql = "SELECT nombre FROM usuarios where nombre='$nom'";
    $result = $conexion->query($sql);
    $row=$result->fetch_assoc();
    if($row["nombre"]==$nom){
        //echo "El usuario existe". "<br>";
        $sql2 = "SELECT pass FROM usuarios where nombre='$nom'";
        $result2 = $conexion->query($sql2);
        $row2=$result2->fetch_assoc();
        if($row2["pass"]==$pass){
                if(@$_SESSION['logueado']!=TRUE){
                    $_SESSION['logueado'] = TRUE;
                    $_SESSION['nombre'] = $nom;
                    $_SESSION['contra'] = $pass;
                }
                ?>

            <p><h1>Bienvenido <?php echo $_SESSION['nombre']; ?> a Tecnolex <br></h1></p>

            <?php
            ?>
                <h1>Redirigiendo...</h1>
            <?php
            header( "refresh:3;url=forolog.php" );
            //echo "Incio Sesion, bienvenido ". $nom . " A tecnolex". "<br>";
        }else{
            ?>
            <p><h1>Contraseña Incorrecta</h1></p>
            <?php
            //echo "Contraseña incorrecta". "<br>";
        }
    }else{
        ?>
            <p><h1>Ell usuario no existe</h1></p>
        <?php
        //echo "El usuario no existe". "<br>";
    }
    

    /*$sql = "SELECT pass FROM usuarios where nombre='$nom'";
    $result = $conexion->query($sql);
    if(!$result){
        echo "error";
    }else{
        while ($row = $result->fetch_assoc()){
            echo $row["pass"];
        }
    }

    while ($row = $result->fetch_assoc()){
        echo $row["pass"];
    }
*/
    echo "<p>";
    //echo $sql;
    echo "<p>";

    mysqli_close($conexion);
?>
</body>
</html>