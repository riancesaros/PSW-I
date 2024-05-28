<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="box">
        <h2>Exercicio 1</h2>
        <pre>
            <?php
                define("PI", 3.1415);

                echo PI;
            ?>
        </pre>
        <h2>Exercicio 2</h2>
        <pre>
            <?php
                function soma () {
                    $x1 = 10;
                    $x2 = 35;
                    $var = $x1 + $x2;
                    echo $var;
                }

                soma ();

            ?>
        </pre>
        <h2>Exercicio 3</h2>
        <pre>
            <?php
                function soma2 ($valor1, $valor2) {
                    $result = $valor1 + $valor2;
                    echo $result;
                }

                soma2 (12, 3);

            ?>
        </pre>
    </div>
</body>
</html>
