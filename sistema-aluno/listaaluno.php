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
            <h3>Lista Alunos</h3><br>
            <table>
                <tr>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Idade</th>
                  <th>Email</th>
                </tr>

                <tr>
                  <td> <?php echo $_GET["name"]; ?> </td>
                  <td> <?php echo $_GET["adress"]; ?> </td>
                  <td> <?php echo $_GET["age"]; ?> </td>
                  <td> <?php echo $_GET["email"]; ?> </td>
                
                </tr>
              </table>
              <?php print_r($_GET)?>
        </Section>
    </article>
    <footer>Rodape</footer>
</body>
</html>