<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.2">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="box">
        <?php
            $array = [
                'alunos' => [
                    [
                        'nome' => 'fabio',
                        'nota' => random_int(1,10),
                    ],
                    [
                        'nome' => 'dudinha',
                        'nota' => random_int(1,10),
                    ],
                    [
                        'nome' => 'maria ana',
                        'nota' => random_int(1,10),
                    ],    
                    [
                        'nome' => 'zepedo',
                        'nota' => random_int(1,10),
                    ]
                ],
            ];
        ?>
        <h2>Exemplo 1</h2>
        
        <table>
            <tr>
                <th>Nome</th>
                <th>Nota</th>

            </tr>
            
            <tr>
                <?php 
                for ($i=0; i<count[$array['alunos']]; $i++) {
                    echo'<td>'.$array['alunos'][$i]['nome'].'</td>';
                    echo'<td>'.$array['alunos'][$i]['nota'].'</td>';
                };
                ?>
            </tr>
        </table>
        <!--
        <h2>Exemplo 3 - (foreach)</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereço</th>
            </tr>
            <?php
                foreach ($array['alunos'] as $key => $value) {
                    echo "<tr>";
                        foreach ($value as $key2 => $value2) {
                            echo "<td>".$value2."</td>";
                        };
                    echo "</tr>";
                };
            ?>
        </table>
        -->
    </div>
</body>
</html>