<?php
$nombre = $_POST['u'];
$contraseña = $_POST['p'];

$contraseñabien = sha1($contraseña);

$servidor = "localhost";
$usuario = "root";
//$password = "usbw";
$bd = "daw2";


$con = mysqli_connect($servidor,$usuario,"",$bd);

//SELECT Nombre FROM `usuarios` WHERE Nombre = "$nombre";

//SELECT Cont FROM `usuarios` WHERE Cont ="$contraseñabien";
if(!$con){
    echo "La conexion no se ha podido realizar";
    
}else{
    mysqli_set_charset($con,"utf8");
    
        $contraseñabien = sha1($contraseña);
        $sql =  $con-> query ("SELECT * FROM `usuarios` WHERE Nombre = '$nombre' and Cont = '$contraseñabien'");
      if($datos = $sql -> fetch_object()){
        header("location: Tienda.php");
      }else{
        header("location: index.html");
      }
}
?>