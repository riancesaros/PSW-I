<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="box">
        <h3>Cadastro de Produtos</h3>
        <form id="formulario" method="post" action="lista.php">
            <label for="nome">Produto</label>
            <input type="text" id="nome" name="nome"><br>
            <label for="nome">Marca</label>
            <select name="marca" required="required">
                <option value="insider">Insider</option>
                <option value="hering">Hering</option>
                <option value="ellos">Ellos</option>
                <option value="enfim">Enfim</option>
                <option value="diesel">Diesel</option>
            </select><br>
            <label for="nome">Tamanho</label>
            <select name="marca" required="required">
                <option value="p">P</option>
                <option value="m">M</option>
                <option value="g">G</option>
                <option value="gg">GG</option>
            </select>
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo"><br>
            <label for="preco-venda">Preço de venda</label>
            <input type="text" id="preco-venda" name="preco-venda">
            <label for="preco-compra">Preço de compra</label>
            <input type="text" id="preco-compra" name="preco-compra"><br>
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor">
            <label for="genero">Gênero</label>
            <input type="radio" id="genero" name="fav_language" value="genero">
            <label for="masculino">Masculino</label>
            <input type="radio" id="genero" name="fav_language" value="genero">
            <label for="feminino">Feminino</label><br>
            <label for="data-compra">Data da compra</label>
            <input type="date" id="data-compra"" name="data-compra""><br>
            <input type="submit" id="enviar" value="Enviar">
        </form>
    </div>
    <pre>
    </pre>
</body>
</html>