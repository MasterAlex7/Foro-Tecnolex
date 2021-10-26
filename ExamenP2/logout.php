<?php 
session_start();
if (@$_SESSION['logueado']!=false) {
    session_unset();
    session_destroy();
    header('Location: login.php');
}else{
    echo "no se que pedo";
}
?>