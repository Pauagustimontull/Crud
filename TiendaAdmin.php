<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Main.css" />
    <title>Document</title>
</head>


<body>
    <nav class="navbar navbar-dark bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="/TiendaAdmin.php?nom=<?php echo $_GET['nom'] ?>">PauTienda</a>
            <a class="navbar-brand" href="/Key.php?nom=<?php echo $_GET['nom'] ?>">Gernerar Key Nuevo usuario</a>
            <a href="/carrito_finalizar_admin.php?nom=<?php echo $_GET['nom'] ?>"><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </span>
                </button>
            </a>

        </div>
    </nav>

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
            $usuario = "id19751186_root";
            $password = "~1dkffHOtQtkLGLy";
            $bd = "id19751186_localhost";


            $con = mysqli_connect($servidor, $usuario, $password, $bd);
            $sql2 = "SELECT * FROM `productos`";
            $consulta = mysqli_query($con, $sql2);
            if (isset($_GET['nom'])) {
                $nombre = $_GET['nom'];
            }

            while ($fila = $consulta->fetch_assoc()) {
                $contad = $contad + 1;
                echo "<tr>";
                echo "<td>" . $fila["ID"] . "</td>";
                echo "<td>" . $fila["Nombre"] . "</td>";
                echo "<td>" . $fila["Cantidad"] . "</td>";
                echo "<td>" . $fila["Precio"] . "</td>";
                echo "<td>" . $fila["Descripcion"] . "</td>";
            ?>
                <link rel="stylesheet" href="Main.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <td style="width:15px"> <a href="/edit.php?id=<?php echo $fila['ID']  ?>&nom=<?php echo $nombre ?>"><button class="btn btn-success">Editar</button></td></a>

<td style="width:15px"> <a href="/eliminar.php?id=<?php echo $fila['ID'] ?>&nom=<?php echo $nombre ?>"> <button class="btn btn-danger">Eliminar</button> </td></a>

                <td style="width:25px"> <a href="/carrito.php?id=<?php echo $fila['ID'] ?>&nom=<?php echo $nombre ?>"> <button type="button" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 
                11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5
                 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg>

                        </button> </a></td>
            <?php
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <style type="text/css">
    a { text-decoration: none; 
   } 
</style> 




<a href="/Crud.php?nom=<?php echo $_GET['nom'] ?>">
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
            <span>Añadir</span>
        </button>
</a>
    <br>
    <br>
     


<a href="/index.html">
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
            <span>Salir</span>
        </button>
</a>
    <br>
</body>

</html>