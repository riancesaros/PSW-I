<?php
    $estudante1 = [
        'Nome' => 'Rian',
        'Idade' => '17',
        'Telefone' => '77981112461',
        'Matricula' => '20221GBI23'
    ];
    
    foreach ($estudante1 as $caracteristica => $dado) {
        echo $dado . " - " . $caracteristica . PHP_EOL;
    }


?>