<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title class="titulo-kawaii">Crud de alumnos</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="crud_alumnos.php">Alumnos</a></li>
        </ul>
    </nav>
    <?php
        $conexion = mysqli_connect('localhost', 'root', '', 'escuela', 3306);
        $consulta = "select * from alumnos;";
        $resultado = mysqli_query($conexion, $consulta);
        echo "<h1>Crud de Alumnos</h1>";
        echo "<table border='1'>";
            while($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                echo "<td>". $mostrar['Matricula']. "</td>";
                echo "<td>". $mostrar['Apellidos']. "</td>";
                echo "<td>". $mostrar['Nombre']. "</td>";
                echo "<td>". $mostrar['Nacimiento']. "</td>";
                echo "<td>". $mostrar['Direccion']. "</td>";
                echo "<td>". $mostrar['Telefono']. "</td>";
                echo "<td>". $mostrar['Correo']. "</td>";
                echo "<td>". $mostrar['Padre_Tutor']. "</td>";
                echo"</tr>";
            }
        echo "</table>";
        mysqli_close($conexion);
        echo "<form action='insertar.php'>
                <tr>
                    <td></td>
                    <td><input type='submit' value='Insertar' class='inser'></td>
                </tr>
            </form>";
        echo "<form action='borrar.php'>
                <tr>
                    <td></td>
                    <td><input type='submit' value='Borrar' class='borrar'></td>
                </tr>
            </form>";
    ?>
</body>
</html>
