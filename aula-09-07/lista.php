<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listastyles.css">
</head>
<body>
    <table>
        <tr>
            <th>Nome do produto</th>
            <th>Marca</th>
            <th>Tamanho</th>
            <th>Modelo</th>
            <th>Preço de compra</th>
            <th>Preço de venda</th>
            <th>Cor</th>
            <th>Gênero</th>
            <th>Data de venda</th>
        </tr>
        <tr>
            <td><?php echo" $_POST[nome]"; ?></td>
            <td>Hering</td>
            <td>M</td>
            <td>Camiseta</td>
            <td>R$ 16,81</td>
            <td>R$ 29,99</td>
            <td>Vermelho</td>
            <td>M</td>
            <td>09/07/2024</td>
        </tr>
    </table>
    <?php
        function obterDados($post) {
            $dados = $post['cpf']." - ".$post['nome'];
            echo "<script> alert('".$dados."') </script>";
        }
    ?>
</body>
</html>