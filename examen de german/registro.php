<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title class="titulo-kawaii">registro</title>
</head>
<body>
    <header>
        <h1>Registro</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <table border="1">
        <form action="registro.php" method="post">
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="txtUsuario"></td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="txtNombre"></td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td><input type="email" name="txtCorreo"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="txtContraseña"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Confirmar" class="titulo-kawaii"></td>
            </tr>
        </form>
    </table>
    <?php
        if($_POST)
        {
            $Nombre=$_POST['txtNombre'];
            $Usuario=$_POST['txtUsuario'];
            $Correo=$_POST['txtCorreo'];
            $Contraseña=$_POST['txtContraseña'];
            $conexion = mysqli_connect('localhost', 'root', '', 'escuela', 3306);
            $consulta = "insert into usuarios values ('". $Usuario. "', '". $Nombre . "', '". $Correo . "', sha1('". $Contraseña . "'));";
            $resultado = mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
            header("location: login.php");
            echo "proceso terminado";
        }
    ?>
</body>
</html>