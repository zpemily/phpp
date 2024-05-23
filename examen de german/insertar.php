<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title class="titulo-kawaii">Insertar</title>
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
    <table border="1">
        <form method="post">
            <tr>
                <td>Matricula:</td>
                <td><input type="text" name="txtMatricula"></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="txtApellidos"></td>
              </tr>
             <tr>
                 <td>Nombre:</td>
                 <td><input type="text" name="txtNombre"></td>
            </tr>
               <tr>
                <td>Nacimiento:</td>
                 <td><input type="text" name="txtNacimiento"></td>
               </tr>
            <tr>
                <td>Direccion:</td>
                <td><input type="text" name="txtDireccion"></td>
              </tr>
                 <tr>
                 <td>Telefono:</td>
                  <td><input type="text" name="txtTelefono"></td>
               </tr>
            <tr>
                   <td>Correo:</td>
                    <td><input type="email" name="txtCorreo"></td>
            </tr>
                <tr>
                      <td>Padre_Tutor:</td>
                      <td><input type="text" name="txtPadre_Tutor"></td>
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
            $Apellidos=$_POST['txtApellidos'];
            $Nombre=$_POST['txtNombre'];
             $Nacimiento=$_POST['txtNacimiento'];
            $Direccion=$_POST['txtDireccion'];
              $Telefono=$_POST['txtTelefono'];
            $Correo=$_POST['txtCorreo'];
            $Padre_Tutor=$_POST['txtPadre_Tutor'];
            $conexion = mysqli_connect('localhost', 'root', '', 'escuela', 3306);
            $consulta = "insert into alumnos (Matricula, Apellidos, Nombre, Nacimiento, Direccion, Telefono, Correo, Padre_Tutor) values ('". $Matricula. "', '". $Apellidos . "', '". $Nombre . "', '". $Nacimiento . "', '". $Direccion. "', '". $Telefono. "', '". $Correo. "', '". $Padre_Tutor. "');";
            $resultado = mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
            header("location: crud_alumnos.php");
        }
        ?>
    </table>
</body>
</html>