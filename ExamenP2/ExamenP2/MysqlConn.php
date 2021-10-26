<?php

function conectar()
{
    $servername = "localhost";
    $database = "forotecnolex";
    $username = "root";
    $password = "Alexelpro27";

//crear la conexion
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("ERROR: la conexion no se realizo correctamente" . mysqli_connect_error());
    }
    //echo "conexion correcta";
    echo "<p>";
    $cbd = mysqli_select_db($conn, $database);
    if (!$cbd) {
        die("ERROR DE CONEXION CON LA BASE DE DATOS");
    }
    //echo "conexion a " . $database . " correcta";
    echo "<p>";
    return($conn);
}
