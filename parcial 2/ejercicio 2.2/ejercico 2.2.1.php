<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body class="ru">
    <div class="body">
        <div class="php" style="font-size:5rem;">
            <?php
                if($_POST)
                {
                    $x=$_POST['txt-f(x)'];

                    function f ($j)
                    {
                        $cont=0;
                        if($j<=0)
                        {
                            $cont=($j*$j)-$j;
                        }
                        elseif($j>0)
                        {
                            $cont=(-$j*$j)+(3*$j);
                        }
                        return $cont;
                    }
                    $r=f($x);

                    echo "f(" . $x . ") dio como resulltado: " . $r;
                }
            ?>
        </div>
    </div>
    <button class="button" style="border: none; font-size: 16px; color: #fff; padding: 8px 16px; background-color: #7a11cb; border-radius: 20px; margin: 14px; cursor: pointer; transition: all 0.3s ease; text-decoration: none;">
        <a href="../html/ejercicio2.2.1.html" class="button" style="border: none; font-size: 16px; color: #fff; padding: 8px 16px; background-color: #7a11cb; border-radius: 20px; margin: 14px; cursor: pointer; transition: all 0.3s ease; text-decoration: none;">
            regresar al problema
        </a>
    </button>
</body>
</html>
