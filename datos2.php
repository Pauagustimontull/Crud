<?php
$nombre = $_POST['u'];
$contraseña = $_POST['p'];

$contraseñabien = sha1($contraseña);

$servidor = "localhost";
$usuario = "id19751186_root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";


$con = mysqli_connect($servidor, $usuario, "~1dkffHOtQtkLGLy", $bd);

//SELECT Nombre FROM `usuarios` WHERE Nombre = "$nombre";

//SELECT Cont FROM `usuarios` WHERE Cont ="$contraseñabien";
if (!$con) {
  echo "La conexion no se ha podido realizar";
} else {
  mysqli_set_charset($con, "utf8");

  $contraseñabien = sha1($contraseña);
  $sql =  $con->query("SELECT * FROM `usuarios` WHERE Nombre = '$nombre' and Cont = '$contraseñabien'");
  $sql2 =  $con->query("SELECT * FROM `usuarios` WHERE Nombre = '$nombre' and Cont = '$contraseñabien'");
 ;

 if( $datosad = $sql->fetch_assoc() ){
  if($datosad['admin']==1){
  header("location: TiendaAdmin.php?nom=$nombre");
  }else{
    header("location: Tienda.php?nom=$nombre");
    
  }
}else{
  header("location: index.html");
}
  
}
