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
        <h1>Array - Laços</h1>
        <h2>Exemplo 1 - imprimindo um por um</h2>
        <pre> 
            <?php

            $a1 = array("antonio", "luis", "jose", "joao");
            echo $a1[0]." ";
            echo $a1[1]." ";
            echo $a1[2]." ";
            echo $a1[3]." ";

            ?> 
        </pre>
        <h2>Exemplo 2 - usando for()</h2>
        <pre> 
            <?php
            $a2 = array(10,9,8,7);
            for($i=0;$i<count($a2);$i++){
                echo $a2[$i]." <br> ";
            }
            ?> 
        </pre>
        <h2>Exemplo 3</h2>
        <pre> 
            <?php
            $a3 = array("roberto",20,"guanambi",7);
            foreach ($a3 as $chave => $valor) {
                echo $chave . " - " . $valor . "<br>";
            }
            ?> 
        </pre>
    </div>
    
</body>
</html>