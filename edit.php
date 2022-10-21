<?php
$servidor = "localhost";
$usuario = "root";
//$password = "usbw";
$bd = "daw2";



$con = mysqli_connect($servidor,$usuario,"",$bd);


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
            header("location: Tienda.php");
            

            
       }
        //header("location: Tienda.php");
    }
        
        
    ?> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <h1>Editando Productos</h1>
     <div class="container p-4">
     <div class="row">
     <div class="col-md-4-mx-auto">
     <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
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
        <button class="btn-success" name="update">
          Actualizar
          </button>
      </form>
      </div>
    </div>
  </div>
</div>
 <?php  
?>