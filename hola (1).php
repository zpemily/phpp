<html>
    <body>
        VERIFICAR OPERACIONES DE ASIGNACION <hr>
        <?php
        $x=5;
        $y=1;
        echo"valores x,y: ", $x,"",$y, "<br>";
        $x+=$y; #equivale a $x=$x+$y
        echo "x:",$x,"<br>";
        $x-=$y;
        echo "x: ",$x,"<br>"; #x vale 5
        $a=$x++;
        echo "a x",$a,"",$x,"<br>";#x vale 6
        $a=++$x;
        echo "a x: ",$a,"",$x,"<br>";#valen 7
        if ($a==$x and $x%2==1)
        {
            echo "cumple condicion <br>";
        }
        echo "ENCUENTRA EL MAXIMO <BR>";
        echo max(1,3,4,5,80);
        
        ?>
    </body>
</html>