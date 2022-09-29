<?php
$nombre = $_POST['Nombre'];
$ID = $_POST['ID'];
$cantidad = $_POST['Cantidad'];
$precio = $_POST['Precio'];
$descripcion = $_POST['Descripcion'];

$contad = 0;

$servidor = "localhost";
$usuario = "root";
$password = "usbw";
$bd = "daw2";


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
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Main.css" />
<title>Document</title>
</head>
<body>
<h1>Productos</h1>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
    
<?php
    $sql2="SELECT * FROM `productos`";
    $consulta=mysqli_query($con,$sql2);
    while($fila=$consulta->fetch_assoc()){
        $contad = $contad+1;
        echo "<tr>";
        echo "<td>".$fila["ID"]."</td>";
        echo "<td>".$fila["Nombre"]."</td>";
        echo "<td>".$fila["Cantidad"]."</td>";
        echo "<td>".$fila["Precio"]."</td>";
        echo "<td>".$fila["Descripcion"]."</td>";
        ?>
        <style type="text/css">
        .myButton {
          box-shadow:inset 0px 1px 0px 0px #f7c5c0;
          background:linear-gradient(to bottom, #fc8d83 5%, #e4685d 100%);
          background-color:#fc8d83;
          border-radius:6px;
          border:1px solid #d83526;
          display:inline-block;
          cursor:pointer;
          color:#ffffff;
          font-family:Arial;
          font-size:15px;
          font-weight:bold;
          padding:6px 24px;
          text-decoration:none;
          text-shadow:0px 1px 0px #b23e35;
        }
        .myButton:hover {
          background:linear-gradient(to bottom, #e4685d 5%, #fc8d83 100%);
          background-color:#e4685d;
        }
        .myButton:active {
          position:relative;
          top:1px;
        } 
        </style>
         <link rel="stylesheet" href="Main.css" />
        <td> <a href="#" class="myButton">Eliminar</a> </td>"
        <?php
        echo "</tr>";
    }
?>
  </tbody>
</table>

<a href="http://localhost/Formulario.html">
<button id="Bt1">
      <div class="svg-wrapper-1">
        <div class="svg-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z"></path>
            <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
          </svg>
        </div>
      </div>
      <span>Return</span>
    </button>
</a>
</form> 
</body>
</html>


<?php
}
?>