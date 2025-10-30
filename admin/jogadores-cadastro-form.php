<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Jogador (CS2)</title>
</head>
<body>
<h1>Novo Jogador (CS2)</h1>
<form action="jogadores-cadastro.php" method="post">
    Nick: <input type="text" name="nick" required><br>
    Patente: <input type="text" name="patente"><br>
    Time: <input type="text" name="time"><br>
    K/D: <input type="number" step="0.01" name="kd"><br>
    País: <input type="text" name="pais"><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
