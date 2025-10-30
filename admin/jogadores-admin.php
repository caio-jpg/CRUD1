<?php
include('config.inc.php');
$result = mysqli_query($conexao, "SELECT * FROM jogadores");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administração de Jogadores (CS2)</title>
</head>
<body>
<h1>Jogadores (CS2)</h1>
<a href="jogadores-cadastro-form.php">Cadastrar novo jogador</a>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Nick</th><th>Patente</th><th>Time</th><th>K/D</th><th>País</th><th>Ações</th></tr>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nick'] ?></td>
    <td><?= $row['patente'] ?></td>
    <td><?= $row['time'] ?></td>
    <td><?= $row['kd'] ?></td>
    <td><?= $row['pais'] ?></td>
    <td>
        <a href="jogadores-altera-form.php?id=<?= $row['id'] ?>">Editar</a> |
        <a href="jogadores-excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
