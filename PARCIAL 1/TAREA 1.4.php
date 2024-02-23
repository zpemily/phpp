<html>
<head></head>
<body>
    <h1>EL MAYOR DE 3 NUMEROS </h1>
    <h2>Descripción</h2>
Realiza un problema que imprima el mayor de tres números.


<h2>Entrada</h2>
Realiza un problema que imprima el mayor de tres números.

<h2>Salida</h2>
El número entero mayor de los tres números introducidos.
<H2>Ejemplo</H2>
<?php
$a=35;
$b=30;
$c=40;
        echo "variable a=",$a,"<br>";
        echo "variable b=",$b,"<br>";
        echo "variable c=",$c,"<br>";
        
        if ($a>$b & $a>$c)
        {
          echo "el mayor es:",$a, "<br>";
        }
      
        else if ($b>$a & $b>$c)
        {
            echo "el mayor es:",$b, "<br>";
        }
        else
        {
            echo "el mayor es:",$c, "<br>";
        }
    
        ?>

       <h1>CUANTOS VALEN 7</h1>
      
.
    <h2>Descripción</h2>
    Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.

  <h2>Entrada</h2>
  Dos enteros en el rango de -1000 A 1000
 
<h2>Salida</h2>
La cantidad de enteros iguales a 7
<H2>Ejemplo</H2>
 <?php
$a=-3;
$b=8;
echo "variable a=",$a,"<br>";
echo "variable b=",$b, "<br>";
if ($a==7 && $b==7)
 {
   echo"2";
 }
 else if ($a==7)
 {
   echo "1";
 }
   else if ($b==7)
 {
     echo "1";
 }
  else 
 {
   echo "0";
 }
 ?>
      <h1>ESTACIONES DEL AÑO</h1>
    <h2>Descripción</h2>
    

  <h2>Entrada</h2>
  Dos números enteros M y D separados por un espacio que corresponden al día y mes de una fecha determinada

<h2>Salida</h2>
Una cadena s que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida
<H2>Ejemplo</H2>
      <?php
$estacion="primavera";
if($estacion=="invierno")
{
  echo "invierni, 21-12 al 20-03";
}
elseif($estacion=="primavera")
{
  echo "primavera, 21-03 al 20-06";
}
elseif($estacion=="verano")
{
  echo "verano, 21-06 al 20-09";
}
elseif($estacion=="otoño")
{
  echo "otoño, 21-09 al 20-012";
}

?>


        </body>
    </html>