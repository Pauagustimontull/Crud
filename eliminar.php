<?php
$servidor = "localhost";
$usuario = "root";
//$password = "usbw";
$bd = "daw2";



$con = mysqli_connect($servidor,$usuario,"",$bd);


    mysqli_set_charset($con,"utf8");
    
       if(isset($_GET['id'])){
        $id = $_GET['id'];
      
        $sql =  " DELETE FROM productos WHERE `productos`.`ID` =$id";
        $consulta = mysqli_query($con,$sql);
       
        header("location: Tienda.php");
    }
        
        
    //header("location: Tienda.php");
        
   
?>