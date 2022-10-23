<?php
$nombre = $_POST['u'];
$contraseña = $_POST['p'];
$correo = $_POST['c'];
$key = $_POST['k'];

$servidor = "localhost";
$usuario = "id19751186_root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";
if(strlen($key)== 21 && substr($key, -1) == 5){
  

$con = mysqli_connect($servidor, $usuario, "~1dkffHOtQtkLGLy", $bd);

if (!$con) {
  echo "La conexion no se ha podido realizar";
} else {
  mysqli_set_charset($con, "utf8");

  $contraseñabien = sha1($contraseña);
  $sql = "INSERT INTO `usuarios`(`ID`, `Nombre`, `Cont`, `correo`) VALUES (NULL,'$nombre','$contraseñabien','$correo')";
  $consulta = mysqli_query($con, $sql);
  $log =  $con->query("SELECT ID FROM `usuarios` WHERE Nombre='$nombre' and Cont ='$contraseñabien'");

  
  header("location: Tienda.php?nom=$nombre");

  
}
if (!$consulta) {
  die("No se ha podido realizar el insert");
} else {
}
}else{
  header("Location: /registro.html");
}
?>
