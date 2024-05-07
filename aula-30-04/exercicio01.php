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
        echo "- Aluno 1 -<br>";

        $aluno1['nome'] = "rian";
        $aluno1['idade'] = 30;
        $aluno1['end'] = "rua sete de setembro";
        $aluno1['cidade'] = "Guanambi";
        $aluno1['estado'] = "BA";
        $aluno1['cpf'] = 44444444444;
        
        echo "Olá $aluno1[nome] você confirma os seguintes dados?:<br> Idade = $aluno1[idade], Endereço = $aluno1[end], Cidade = $aluno1[cidade],  Estado = $aluno1[estado] e CPF = $aluno1[cpf]?";
        echo "<br><br>";
        echo "- Aluno 2 -<br>";

        $aluno2['nome'] = "mariana";
        $aluno2['idade'] = 22;
        $aluno2['end'] = "rua do limoeiro";
        $aluno2['cidade'] = "CNN";
        $aluno2['estado'] = "BA";
        $aluno2['cpf'] = 11111111111;
        

        echo "Olá $aluno2[nome] você confirma os seguintes dados?:<br> Idade = $aluno2[idade], Endereço = $aluno2[end], Cidade = $aluno2[cidade],  Estado = $aluno2[estado] e CPF = $aluno2[cpf]?";
        echo "<br><br>";
        echo "- Aluno 3 -<br>";

        $aluno3['nome'] = "cleiton";
        $aluno3['idade'] = 41;
        $aluno3['end'] = "rua das algarobas";
        $aluno3['cidade'] = "Guanambi";
        $aluno3['estado'] = "BA";
        $aluno3['cpf'] = 22222222222;
        
        echo "Olá $aluno3[nome] você confirma os seguintes dados?:<br> Idade = $aluno3[idade], Endereço = $aluno3[end], Cidade = $aluno3[cidade],  Estado = $aluno3[estado] e CPF = $aluno3[cpf]?";
        echo "<br><br>";
        echo "- Professor - <br>";

        $professor1['nome'] = "RRJ";
        $professor1['idade'] = 24;
        $professor1['end'] = "rua 28 de junho";
        $professor1['cidade'] = "Pindai";
        $professor1['estado'] = "BA";
        $professor1['cpf'] = 33333333333;
        
        echo "Olá $professor1[nome] você confirma os seguintes dados?:<br> Idade = $professor1[idade], Endereço = $professor1[end], Cidade = $professor1[cidade],  Estado = $professor1[estado] e CPF = $professor1[cpf]?";

    ?> 
    </div>
</body>
</html>