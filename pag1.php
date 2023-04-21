<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>contraseña: sandia</h1>
    </header>

    <form action="#" method="post" enctype="multipart/form-data">
        <input type="password" name="clave">
        <input type="submit" name="enviar" id="">
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $clave = $_POST['clave'];
            if($clave == 'sandia'){
                header("Location: pag2.php");
            }
            else{
                header("Location: pag3.php");
            }
        }   
              


    ?>
</body>
</html>