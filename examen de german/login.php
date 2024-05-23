<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title class="titulo-kawaii" >Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <table border="1">
        <form method="post">
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="txtUsuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="text" name="txtContraseña"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enviar"  class="titulo-kawaii"></td>
            </tr>
        </form>
    </table>
    
    <?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','escuela','3306');
            $hhm1 = $_POST["txtUsuario"];
            $hhm2 = $_POST["txtContraseña"];
            $consulta = "select * from usuarios where login = '$hhm1' and password= sha1('$hhm2');";
            $resultado = mysqli_query($conexion, $consulta);
            if($mostrar = mysqli_fetch_array($resultado))
            {
                header("location: crud_alumnos.php");
            }
            else
            {
                echo "contraseña o usuario incorrectos o inexistentes";
            }
            mysqli_close($conexion);
        }
    ?>
</body>
</html>