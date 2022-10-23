
<?php
$servidor = "localhost";
$usuario = "root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";



$con = mysqli_connect($servidor, $usuario, "$password", $bd);


mysqli_set_charset($con, "utf8");

$nombrep = $_GET['nom'];
$idprod = $_GET['id'];

$sql2 = "SELECT ID FROM `usuarios` WHERE Nombre='$nombrep'";

$consulta = mysqli_query($con, $sql2);

$fila = $consulta->fetch_assoc();
$idusu = $fila['ID'];

$sql3 = "INSERT INTO articulo_carrito(ID_Carrito , ID_Prod, Cant) Values($idusu, $idprod,1)";
$consulta3 = mysqli_query($con, $sql3);

header("location: Tienda.php?nom=$nombrep");
?>