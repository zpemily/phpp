<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="../css/stylee.css">
</head>
<body class="ru">
    <div class="body">
        <div class="php" style="font-size:5rem;">
            <?php
                if($_POST)
                {
                    $x1=$_POST['txt-x'];
                    $y1=$_POST['txt-y'];
                    $z1=$_POST['txt-z'];

                    function g($b,$c)
                    {
                        return ((7*(int)$b-3)%($c*$c+1));
                    }
                    function f($a)
                    {
                        return (4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
                    }
                    function h($x1,$y1,$z1)
                    {
                        return f($x1/$y1)+3*g($z1/$y1,$x1);
                    }

                    $j = h($x1, $y1, $z1);

                    echo 'EL resultado llegado con "x", "y", "z" es: ' . $j;
                }
            ?>
        </div>
    </div>
    <button class="button" style="border: none; font-size: 16px; color: #fff; padding: 8px 16px; background-color: #7a11cb; border-radius: 20px; margin: 14px; cursor: pointer; transition: all 0.3s ease; text-decoration: none;">
        <a href="../html/ejercicio 2.1.html" class="button" style="border: none; font-size: 16px; color: #fff; padding: 8px 16px; background-color: #7a11cb; border-radius: 20px; margin: 14px; cursor: pointer; transition: all 0.3s ease; text-decoration: none;">
            regresar al problema
        </a>
    </button>
</body>
</html>
