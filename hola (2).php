<html>
    <body>
        <h1>ESTRUCTURA DE CONTROL (IF)</h1>
        <?php
        $a=35;
        $b=30;
        if ($a>$b)
        {
          echo"el mayor es:",$a,"<br>";
        }
        #if else
        echo "<hr> resultado de if else <br>";
        if ($a>=$b)
        {
            echo"el mayor es:",$a,"<br>";
        }
        else
        {
            echo"el mayor es:",$b,"<br>";
        }
        #if else if
        $estacion="primavera";
        if($estacion=="invierno")
       {
        echo "invierno,del 21 de diciembre al 20 de marzo";
       }
        else if ($estacion=="primavera")
       {
         echo"primavera,del 21 de marzo al 20 de junio";

       }
       else if ($estacion=="verano")
       {
         echo"verano del 21 de junio al 20 de septiembre";
         
       }
     else if ($estacion=="otoño")
      {
      echo"verano del 21 de junio al 20 de septiembre";
      
      }
        ?>
    </body>
</html>