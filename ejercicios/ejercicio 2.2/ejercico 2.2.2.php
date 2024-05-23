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
                    $pa = $_POST["palaV"];

                    function vapa($let)
                    {
                        $valores = [
                            'Q' => 1, 'A' => 1, 'Z' => 1,
                            'W' => 2, 'S' => 2, 'X' => 2,
                            'E' => 3, 'D' => 3, 'C' => 3,
                            'R' => 4, 'F' => 4, 'V' => 4,
                            'T' => 5, 'G' => 5, 'B' => 5,
                            'Y' => 6, 'H' => 6, 'N' => 6,
                            'U' => 7, 'J' => 7, 'M' => 7,
                            'I' => 8, 'K' => 8,
                            'O' => 9, 'L' => 9,
                            'P' => 0
                        ];
                        
                        $va = 0;
                        $lets = str_split($let);
                        foreach($lets as $let)
                        {
                            if(isset($valores[$let]))
                            {
                                $va += $valores{$let};
                            }
                        }
                        return $va;
                    }

                    $r= vapa($pa);
                    echo "El valor de la suma de <br> cada letra de la palabra " . $pa . " es de: ". $r;
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
