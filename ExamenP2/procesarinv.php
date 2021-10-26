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
    <title>Logueando</title>
</head>
<body>
<?php
$nom= "invitado";
$pass="";
if(@$_SESSION['logueado']!=TRUE){
    $_SESSION['logueado'] = TRUE;
    $_SESSION['nombre'] = $nom;
    $_SESSION['contra'] = $pass;
}
?>
<p><h1>Bienvenido <?php echo $_SESSION['nombre']; ?> a Tecnolex <br></h1></p>
<h1>Redirigiendo...</h1>
<?php
header( "refresh:3;url=forolog.php" );
?>
</body>
</html>