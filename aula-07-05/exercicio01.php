<?php
    $var = array(1, 2, 3, 5);

    for($i=0; $i<count($var); $i++) {
            echo "$var[$i] ";
    }

    echo "<br><br>";

    foreach ($var as $dado) {
        echo "$dado";
    }

    echo "<br><br>";

    $alunos = array("kaila", "mariana", "diamili", "maria antonia", "raifran");

    for ($i=0; $i<(count($alunos)); $i++) {
        echo $i." $alunos[$i] <br>";
    }

    echo "<br><br>";

    for ($i=0; $i<(count($alunos)); $i++) {
        if ($i = 4) {
            echo $i." $alunos[$i] <br>";
        }
    }

?>