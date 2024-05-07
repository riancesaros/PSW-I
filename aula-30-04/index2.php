<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
    <?php
    echo "<p>- Exemplo 1 -</p> <br>";

    $var = array(1, 2, 3, 5);

    echo "$var[0], $var[1], $var[2], $var[3]";

    echo "<br> <p>- Exemplo 2 -</p> <br>";

    $var1 = array("rian"=>30, "eber"=>40,"fabio"=>60);

    echo "$var1[rian], $var1[eber], $var1[fabio]";

    echo "<br> <p>- Exemplo 3 -</p> <br>";

    $var2 = array(0=>5, 6=>8, 9=>15);

    echo "$var2[0], $var2[6], $var2[9]";

    echo "<br> <p>- Exemplo 4 -</p> <br>";

    $var2[1] = 20;
    $var2[2] = 3;

    echo "$var2[1]<br>";
    echo "$var2[2]<br>";

    echo "<br> <p>- Exemplo 5 -</p> <br>";

    $var2[0] = 4;

    echo "$var2[0], $var2[6], $var2[9]";

    echo "<br><br><br>";
    for($i=0; $i<count($var); $i++) {
        echo "$var[$i]";
    }
    ?> 
    </div>
</body>
</html>

