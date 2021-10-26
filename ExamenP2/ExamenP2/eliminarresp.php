<?php
    session_start();
?>
<?php  
    $id=$_GET['id'];
    
    
    include ("MysqlConn.php");
        $conexion=conectar();

        $sql2 = "SELECT id FROM respuestas where idconsul='$id'";
        $result2 = $conexion->query($sql2);
        $row2=$result2->fetch_assoc();
        $id_eliminacion= $row2["id"];

        $sql = "DELETE FROM respuestas where id='$id_eliminacion'";
        $result = $conexion->query($sql);

        if($_SESSION['nombre']!="admin"){
            header( "refresh:0;url=forolog.php" );
        }else{
            header( "refresh:0;url=foroadmin.php" );
        }
?>