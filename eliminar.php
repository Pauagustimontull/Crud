<?php
$servidor = "localhost";
$usuario = "id19751186_root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";


$con = mysqli_connect($servidor,$usuario,"~1dkffHOtQtkLGLy",$bd);


    mysqli_set_charset($con,"utf8");
    
       if(isset($_GET['id'])){
        $id = $_GET['id'];
      
        $sql =  " DELETE FROM productos WHERE `productos`.`ID` =$id";
        $consulta = mysqli_query($con,$sql);
        $nom =  $_GET['nom'];
            header("location: Tienda.php?nom=$nom");
    }
        
        
    //header("location: Tienda.php");
