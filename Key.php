<?php
    $nom = $_GET['nom'];

    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern)-1;
    for($i = 0; $i < 20; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    $key = $key."5";
   
    
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Main_Login.css" />
    <title>Document</title>
    <style type="text/css"> 
a { text-decoration: none; 
   } 
</style> 
</head>
<body>
    <div class="login">
        <h1>KeyGenerator</h1>
       
            <input type="text" value="<?php echo $key?>"/>
            <a href="/Key.php?nom=<?php echo $_GET['nom'] ?>"><button type="submit" class="btn btn-primary btn-block btn-large">Generar</button><br></a>
   
    <button type="submit" class="btn btn-primary btn-block btn-large">Copiar</button><br>
   
    <a href="/TiendaAdmin.php?nom=<?php echo $_GET['nom'] ?>"><button type="submit" class="btn btn-primary btn-block btn-large">Volver</button><br></a>
  
    </div>
</body>
</html>