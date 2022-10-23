<?php
$servidor = "localhost";
$usuario = "id19751186_root";
$password = "~1dkffHOtQtkLGLy";
$bd = "id19751186_localhost";



$con = mysqli_connect($servidor,$usuario,"~1dkffHOtQtkLGLy",$bd);


    mysqli_set_charset($con,"utf8");
    
       if(isset($_GET['id'])){
        $id = $_GET['id'];
      
        $sql =  " SELECT * FROM productos WHERE `productos`.`ID` = $id";
        $consulta = mysqli_query($con,$sql);

        if(mysqli_num_rows($consulta)==1){
            $row = mysqli_fetch_array($consulta);
            $nombre = $row['Nombre'];
            $cantidad = $row['Cantidad'];
            $precio = $row['Precio'];
            $descripcion = $row['Descripcion'];

            
        }
       if(isset($_POST['update'])){
            $nombre =  $_POST['Nombre'];
            $cantidad =  $_POST['Cantidad'];
            $precio =  $_POST['Precio'];
            $descripcion =  $_POST['Descripcion'];

            $sql2 =  " UPDATE productos set Nombre = '$nombre', Cantidad = $cantidad, Precio = $precio, Descripcion = '$descripcion' WHERE ID=$id ";
            $consulta2 = mysqli_query($con,$sql2);
            $nom =  $_GET['nom'];
            header("location: Tienda.php?nom=$nom");
            

            
       }
        //header("location: Tienda.php");
    }
        
        
    ?> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Main.css" />
        <h1>Editando Productos</h1>
     <div class="container p-4">
     <div class="row">
     <div class="col-md-4-mx-auto">
     <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']?>& nom=<?php echo $_GET['nom']?>" method="POST">
            <div class="form-group">
            <a>Nombre</a>
            <textarea name="Nombre" class="form-control" cols="2" rows="2"><?php echo $nombre; ?></textarea>
        </div>
        <div class="form-group">
        <a>Cantidad</a>
        <textarea name="Cantidad" class="form-control" cols="2" rows="2"><?php echo $cantidad; ?></textarea>
        </div>
        <div class="form-group">
        <a>Precio</a>
        <textarea name="Precio" class="form-control" cols="2" rows="2"><?php echo $precio; ?></textarea>
        </div>
        <div class="form-group">
        <a>Descripcion</a>
                <textarea name="Descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion; ?></textarea>
        </div>
        <br>
        <button class="btn-success" name="update">
          Actualizar
          </button>
      </form>
      </div>
    </div>
  </div>
</div>
<form action="/Tienda.php?nom=<?php echo $_GET['nom']?>" method="post">  
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
            <span>Volver</span>
        </button>
  </form>
 <?php  
?>