<?php
include('config.inc.php');

if (!$conexao) {
    die("Falha na conexão com o banco: " . mysqli_connect_error());
}

$result = mysqli_query($conexao, "SELECT * FROM clientes");
if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Administração de Clientes</title>
    <style>
        body { background-color: #111; color: #FFD700; font-family: Arial; margin: 20px; }
        h1 { text-align: center; }
        a { color: #FFD700; text-decoration: none; }
        a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #FFD700; padding: 10px; text-align: center; }
        th { background-color: #333; }
        tr:nth-child(even) { background-color: #1a1a1a; }
        tr:hover { background-color: #333; }
        .btn { padding: 5px 10px; border: 1px solid #FFD700; border-radius: 4px; background-color: #222; color: #FFD700; cursor: pointer; margin: 2px; }
        .btn:hover { background-color: #444; }
    </style>
</head>
<body>
    <h1>Clientes</h1>
    <a class="btn" href="clientes-cadastro-form.php">➕ Cadastrar Cliente</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>
        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['cidade']) ?></td>
                <td><?= htmlspecialchars($row['estado']) ?></td>
                <td>
                    <a class="btn" href="clientes-altera-form.php?id=<?= $row['id'] ?>">✏️ Editar</a>
                    <a class="btn" href="clientes-excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Deseja realmente excluir?')">🗑️ Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">Nenhum cliente cadastrado.</td></tr>
        <?php endif; ?>
    </table>
<?php mysqli_close($conexao); ?>
</body>
</html>