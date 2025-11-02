<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Cliente</title>
<style>
    body { background-color: #111; color: #FFD700; font-family: Arial; margin: 20px; }
    h1 { text-align: center; margin-bottom: 20px; }
    form { background-color: #1a1a1a; border: 1px solid #FFD700; border-radius: 8px; padding: 20px; width: 400px; margin: 0 auto; }
    label { display: block; margin-bottom: 5px; font-weight: bold; }
    input[type="text"] { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #FFD700; border-radius: 5px; background-color: #222; color: #fff; }
    input[type="submit"] { padding: 10px; border: 1px solid #FFD700; border-radius: 5px; background-color: #222; color: #FFD700; cursor: pointer; width: 100%; font-weight: bold; }
    input[type="submit"]:hover { background-color: #444; }
</style>
</head>
<body>
<h1>Cadastro de Cliente</h1>
<form action="clientes-cadastro.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <label>Cidade:</label>
    <input type="text" name="cidade" required>
    <label>Estado:</label>
    <input type="text" name="estado">
    <input type="submit" value="Cadastrar Cliente">
</form>
</body>
</html>