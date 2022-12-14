<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Main.css" />
    <title>Document</title>
</head>


<body>
    <nav class="navbar navbar-dark bg-dark">

        <div class="container-fluid">
        <a class="navbar-brand" href="/Tienda.php?nom=<?php echo $_GET['nom'] ?>">PauTienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </span>
            </button>

        </div>
    </nav>

    <h1>Tu Carrito</h1>
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
$contad = 0;
$servidor = "localhost";
$usuario = "root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";


$con = mysqli_connect($servidor,$usuario,$password,$bd);

$nom = $_GET['nom'];

$sql3="SELECT ID FROM `usuarios` WHERE Nombre='$nom'";

$consulta1=mysqli_query($con,$sql3);

$fila=$consulta1->fetch_assoc();
$idusu = $fila['ID'];

    $sql2="SELECT * FROM `articulo_carrito` WHERE ID_Carrito =$idusu";
    $consulta=mysqli_query($con,$sql2);
    
    $stack = array();
    $stackcant = array();
    $stackpr = array();
    $index = 0;
    $cont = 0;
    while($fila=$consulta->fetch_assoc()){
        array_push($stackcant, $fila["Cant"]);
        array_push($stack, $fila["ID_Prod"]);
        $cont =  $cont +1;
    }   



    
    
    for ($i = 1; $i <= $cont; $i++) {
       
        $sql4="SELECT * FROM `productos` WHERE ID = $stack[$index]";
    $consulta4=mysqli_query($con,$sql4);
   $prod=$consulta4->fetch_assoc();
   array_push($stackpr, $prod['Precio']); 

        echo "<tr>";
        echo "<td>".$stack[$index]."</td>";
        echo "<td>".$prod['Nombre']."</td>";
        echo "<td>".$stackcant[$index]."</td>";
        echo "<td>".$prod['Precio']."</td>";
        echo "<td>".$prod['Descripcion']."</td>";
        $index = $index+1;
        
        ?>


            

            <?php
        echo "</tr>";
    }
    $total = 0;
    if($index >=1){
    for ($i = 0; $i <= $index-1; $i++) {
        $total = $stackcant[$i] * $stackpr[$i] +$total;
    }

}
    
?>
        </tbody>
    </table>

    <h1 align="center">Total de la compra: <?php 
echo $total;
?></h1>



<a href="/Tienda.php?nom=<?php echo $_GET['nom'] ?>">
        <button id="Bt1" style="text-decoration:none">
            <div class="svg-wrapper-1" style="text-decoration:none">
                <div class="svg-wrapper" style="text-decoration:none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        style="text-decoration:none">
                        <path fill="none" d="M0 0h24v24H0z" style="text-decoration:none"></path>
                        <path fill="currentColor"
                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                            style="text-decoration:none">
                        </path>
                    </svg>
                </div>
            </div>
            <span>Volver</span>
        </button>
</a>
    <br>
</body>

</html>


<?php

?>