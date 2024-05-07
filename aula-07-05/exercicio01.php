<?php
    $var = array(1, 2, 3, 5);

    for($i=0; $i<count($var); $i++) {
            echo "$var[$i] ";
    }

    echo "<br><br>";
    
    foreach ($var as $dado) {
        echo "$dado";
    }

?>