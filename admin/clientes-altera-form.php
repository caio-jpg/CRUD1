<?php
include('config.inc.php');

$id = $_GET['id'] ?? 0;
$sql = "SELECT * FROM clientes WHERE id='$id'";
$result = mysqli_query($conexao, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
} else {
    die("Cliente não encontrado.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Alterar Cliente</title>
<style>
body { background-color: #111; color: #FFD700; font-family: Arial; margin: 20px; }
h1 { text-align: center; }
form { background-color: #1a1a1a; border: 1px solid #FFD700; border-radius: 8px; padding: 20px; width: 400px; margin: 0 auto; }
label { display: block; margin-bottom: 5px; font-weight: bold; }
input[type="text"] { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #FFD700; border-radius: 5px; background-color: #222; color: #fff; }
input[type="submit"] { padding: 10px; border: 1px solid #FFD700; border-radius: 5px; background-color: #222; color: #FFD700; cursor: pointer; width: 100%; font-weight: bold; }
input[type="submit"]:hover { background-color: #444; }
</style>
</head>
<body>
<h1>Alteração de Cliente</h1>
<form action="clientes-altera.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= htmlspecialchars($row['nome']) ?>" required>
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?= htmlspecialchars($row['cidade']) ?>" required>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?= htmlspecialchars($row['estado']) ?>">
    <input type="submit" value="Alterar Cliente">
</form>
</body>
</html>