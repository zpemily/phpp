<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #6e65b3; color: #3f1573; font-size: 3rem;">
    <?php
        $conex = mysqli_connect('localhost', 'root', '', 'sistemas', '3306');
        if(!$conex)
        {
            die("no hay conexion" . mysqli_connect_error());
        }

        $user=$_POST["username"];
        $pass=$_POST["password"];

        $consul = " select * from usuarios where login='". $user . "' && password= sha1('" . $pass . "');";

        $resul=mysqli_query($conex, $consul);
        $nr = mysqli_num_rows($resul);

        if($nr == 0)
        {
        echo "no ingreso";
        }
        else
        {
            echo "bienvenido: " . $user;
        }
    ?>
</body>
</html>