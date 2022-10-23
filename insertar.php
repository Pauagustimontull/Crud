<?php
$nombre = $_POST['Nombre'];
$ID = $_POST['ID'];
$cantidad = $_POST['Cantidad'];
$precio = $_POST['Precio'];
$descripcion = $_POST['Descripcion'];

$contad = 0;

$servidor = "localhost";
$usuario = "id19751186_root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";


$con = mysqli_connect($servidor,$usuario,$password,$bd);

if(!$con){
    echo "La conexion no se ha podido realizar";
    
}else{
    mysqli_set_charset($con,"utf8");
$sql="INSERT INTO `productos`(`ID`, `Nombre`, `Cantidad`, `Precio`, `Descripcion`) VALUES (NULL,'$nombre','$cantidad','$precio','$descripcion')";
$consulta = mysqli_query($con,$sql);
if(!$consulta){
    die("No se ha podido realizar el insert");
}else{

}
//SELECT `Nombre`, `Cantidad`, `Precio`, `Descripcion` FROM `productos`;
}
?>