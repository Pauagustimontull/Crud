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
$contad = 0;
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "daw2";


$con = mysqli_connect($servidor,$usuario,$password,$bd);
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
            <link rel="stylesheet" href="Main.css" />
            <td> <button class="btn btn-success" href="/Tienda/edit.php?id=<?php echo $fila['ID']?>" >
                   Editar
                   </button>

            </td>
            <td> <button class="btn btn-danger"  href="/Tienda/eliminar.php?id=<?php echo $fila['ID']?>" >Eliminar</button> </td>

            <?php
        echo "</tr>";
    }
?>
        </tbody>
    </table>

    



    <form action="/Tienda/Crud.php" method="post">  
     
    <button id="Bt1" style="text-decoration:none">
            <div class="svg-wrapper-1" style="text-decoration:none">
                <div class="svg-wrapper" style="text-decoration:none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="text-decoration:none">
                        <path fill="none" d="M0 0h24v24H0z" style="text-decoration:none"></path>
                        <path fill="currentColor"
                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" style="text-decoration:none">
                        </path>
                    </svg>
                </div>
            </div>
            <span   >Añadir</span>
        </button>
 
            
  </form>
  <br>
<br>
  <form action="/Tienda/Index.html" method="post">  
    <button id="Bt1" style="text-decoration:none">
            <div class="svg-wrapper-1" style="text-decoration:none">
                <div class="svg-wrapper" style="text-decoration:none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="text-decoration:none">
                        <path fill="none" d="M0 0h24v24H0z" style="text-decoration:none"></path>
                        <path fill="currentColor"
                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" style="text-decoration:none">
                        </path>
                    </svg>
                </div>
            </div>
            <span>Salir  </span>
        </button>
  </form>
<br>
</body>

</html>