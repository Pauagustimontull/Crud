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
<br><br><br><br><br><br><br>
<h1 id="H11">Tienda</h1>
    <div id="Div1">
      
    <form action="datos.php?id=<?php echo $_GET['id']?>& nom=<?php echo $_GET['nom']?>" method="POST">
         <br><br>
      
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
             
              <p>Coloque el nombre del producto</p>
              <input type="number" class="form-control" placeholder="Cantidad" name="Cantidad">
              
              <p>Coloque la cantidad de productos</p>
              <input type="number" class="form-control" placeholder="Precio" name="Precio">
              
              <p>Coloque el precio del producto</p>
              <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
              
              <p>Coloque la descripcion del producto</p>
            </div>
          </div>
         
        
      
      
    </div>
    <br><br>
  

    

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
            <span>Enviar  </span>
        </button>
        </form>
<br>
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
</body>
</html>