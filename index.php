<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>Curso</th>
        <th>Ações</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM alunos");
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['idade']}</td>
            <td>{$row['email']}</td>
            <td>{$row['curso']}</td>
            <td><a href='deletar.php?id={$row['id']}'>Excluir</a></td>
        </tr>";
    }
    ?>
</table>