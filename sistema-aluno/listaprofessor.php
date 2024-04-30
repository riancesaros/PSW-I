<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sis Aluno</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="img.jpg" alt="Arduino">
        <nav>
            <a href="aluno.html">Aluno</a>
            <a href="listaaluno.php">Lista Aluno</a>
            <a href="professor.html">Professor</a>
            <a href="listaprofessor.php">Lista Professor</a>
            <a href="index.html">Home</a>
        </nav>
        <img src="img.jpg" alt="Brand">
    </header>
    <article class="main">
        <Section>
            <h3>Dados Pessoais</h3><br>
            <table>
                <tr>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Email</th>
                </tr>

                <tr>
                  <td> <?php echo $_POST["name"]; ?> </td>
                  <td> <?php echo $_POST["adress"]; ?> </td>
                  <td> <?php echo $_POST["city"]; ?> </td>
                  <td> <?php echo $_POST["state"]; ?> </td>
                  <td> <?php echo $_POST["email"]; ?> </td>
                
                </tr>
                
            </table>
            <h3>Dados Profissionais</h3><br>
            <table>
                <tr>
                  <th>Empresa</th>
                  <th>Local de trabalho</th>
                  <th>Cidade</th>
                  <th>CNPJ</th>
                </tr>

                <tr>
                  <td> <?php echo $_POST["company"]; ?> </td>
                  <td> <?php echo $_POST["local"]; ?> </td>
                  <td> <?php echo $_POST["company-city"]; ?> </td>
                  <td> <?php echo $_POST["cnpj"]; ?> </td>
                
                </tr>
                
            </table>
        </Section>
    </article>
    <footer>Rodape</footer>
</body>
</html>