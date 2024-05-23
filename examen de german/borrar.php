<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title class="titulo-kawaii">Borrar</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="crud_alumnos.php"></a></li>
        </ul>
    </nav>
    <table border="1">
        <form method="post">
            <tr>
                <td>Matricula:</td>
                <td><input type="text" name="txtMatricula"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Confirmar"></td>
            </tr>
        </form>
        <?php
        if($_POST)
        {
            $Matricula=$_POST['txtMatricula'];
            $conexion = mysqli_connect('localhost', 'root', '', 'escuela', 3306);
            $consulta = "delete from alumnos where Matricula = '". $Matricula. "';";
            $resultado = mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
            header("location: crud_alumnos.php");
        }
        ?>
    </table>
</body>
</html>