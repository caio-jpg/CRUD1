<?php
include('config.inc.php');

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

$result = mysqli_query($conexao, "SELECT * FROM jogadores");
if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Administração de Jogadores (CS2)</title>
    <style>
        body {
            background-color: #111;
            color: #FFD700;
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #FFD700;
        }
        a {
            color: #FFD700;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #FFD700;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
        }
        tr:nth-child(even) {
            background-color: #1a1a1a;
        }
        tr:hover {
            background-color: #333;
        }
        .btn {
            padding: 5px 10px;
            border: 1px solid #FFD700;
            border-radius: 4px;
            background-color: #222;
            color: #FFD700;
            cursor: pointer;
            margin: 2px;
        }
        .btn:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <h1>Jogadores (CS2)</h1>
    <a class="btn" href="jogadores-cadastro-form.php">➕ Cadastrar</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nick</th>
            <th>Patente</th>
            <th>Time</th>
            <th>K/D</th>
            <th>País</th>
            <th>Ações</th>
        </tr>
        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['nick']) ?></td>
                <td><?= htmlspecialchars($row['patente']) ?></td>
                <td><?= htmlspecialchars($row['time']) ?></td>
                <td><?= htmlspecialchars($row['kd']) ?></td>
                <td><?= htmlspecialchars($row['pais']) ?></td>
                <td>
                    <a class="btn" href="jogadores-altera-form.php?id=<?= $row['id'] ?>">✏️ Editar</a>
                    <a class="btn" href="jogadores-excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Deseja realmente excluir?')">🗑️ Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Nenhum jogador cadastrado.</td>
            </tr>
        <?php endif; ?>
    </table>
<?php
mysqli_close($conexao);
?>
</body>
</html>