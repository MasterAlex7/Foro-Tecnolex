<?php
    session_start();
?>
<?php  
    $id=$_GET['id'];
    echo $id;
    
    
    include ("MysqlConn.php");
        $conexion=conectar();

        $sql3 = "SELECT * FROM respuestas where idconsul='$id'";
        $result3 = $conexion->query($sql3);
        $row2=$result3->fetch_assoc();
        $idresp=$row2['idconsul'];

        $sql = "DELETE FROM consultas where id='$id'";
        $result = $conexion->query($sql);
        $sql2 = "DELETE FROM respuestas where id='$idresp";
        $result2 = $conexion->query($sql2);

        
        if($_SESSION['nombre']!="admin"){
            header( "refresh:0;url=forolog.php" );
        }else{
            header( "refresh:0;url=foroadmin.php" );
        }
?>