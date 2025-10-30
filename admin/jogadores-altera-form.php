<?php
include('config.inc.php');
$id = $_GET['id'];
$result = mysqli_query($conexao, "SELECT * FROM jogadores WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Jogador (CS2)</title>
</head>
<body>
<h1>Alterar Jogador</h1>
<form action="jogadores-altera.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    Nick: <input type="text" name="nick" value="<?= $row['nick'] ?>"><br>
    Patente: <input type="text" name="patente" value="<?= $row['patente'] ?>"><br>
    Time: <input type="text" name="time" value="<?= $row['time'] ?>"><br>
    K/D: <input type="number" step="0.01" name="kd" value="<?= $row['kd'] ?>"><br>
    País: <input type="text" name="pais" value="<?= $row['pais'] ?>"><br>
    <input type="submit" value="Salvar Alterações">
</form>
</body>
</html>
