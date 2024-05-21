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
                        'id' => 1,
                        'nome' => 'fabio',
                        'idade' => 20,
                        'endereco' => 'Rua da Algaroba'
                    ],
                    [
                        'id' => 2,
                        'nome' => 'rian',
                        'idade' => 18,
                        'endereco' => 'Rua dois de Maio'
                    ],
                    [
                        'id' => 3,
                        'nome' => 'dudinha',
                        'idade' => 24,
                        'endereco' => 'Pesqueiro II'
                    ],    
                ],
            ];
        ?>
        <h2>Exemplo 1</h2>
        <pre>
            <?php
                echo "Aluno de ID nº ".$array['alunos'][0]['id'].": <br>
                Nome: ".$array['alunos'][0]['nome']."
                Idade: ".$array['alunos'][0]['idade']."
                Endereço: ".$array['alunos'][0]['endereco']."<br><br><br>";

                echo "Aluno de ID nº ".$array['alunos'][1]['id'].": <br>
                Nome: ".$array['alunos'][1]['nome']."
                Idade: ".$array['alunos'][1]['idade']."
                Endereço: ".$array['alunos'][1]['endereco']."<br><br><br>";

                echo "Aluno de ID nº ".$array['alunos'][2]['id'].": <br>
                Nome: ".$array['alunos'][2]['nome']."
                Idade: ".$array['alunos'][2]['idade']."
                Endereço: ".$array['alunos'][2]['endereco'];
            ?>
        </pre>
        <h2>Exemplo 2</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereço</th>
            </tr>
            <tr>
                <td><?php echo$array['alunos'][0]['id'];?></td>
                <td><?php echo$array['alunos'][0]['nome'];?></td>
                <td><?php echo$array['alunos'][0]['idade'];?></td>
                <td><?php echo$array['alunos'][0]['endereco'];?></td>
            </tr>
            <tr>
                <td><?php echo$array['alunos'][1]['id'];?></td>
                <td><?php echo$array['alunos'][1]['nome'];?></td>
                <td><?php echo$array['alunos'][1]['idade'];?></td>
                <td><?php echo$array['alunos'][1]['endereco'];?></td>
            </tr>
            <tr>
                <td><?php echo$array['alunos'][2]['id'];?></td>
                <td><?php echo$array['alunos'][2]['nome'];?></td>
                <td><?php echo$array['alunos'][2]['idade'];?></td>
                <td><?php echo$array['alunos'][2]['endereco'];?></td>
            </tr>
        </table>
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
    </div>
</body>
</html>