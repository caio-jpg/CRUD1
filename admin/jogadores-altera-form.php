<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Jogador (CS2)</title>
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
            margin-bottom: 20px;
        }

        form {
            background-color: #1a1a1a;
            border: 1px solid #FFD700;
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px #FFD70033;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #FFD700;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #FFD700;
            border-radius: 5px;
            background-color: #222;
            color: #fff; /* texto digitado agora é branco */
        }

        input[type="submit"] {
            padding: 10px 15px;
            border: 1px solid #FFD700;
            border-radius: 5px;
            background-color: #222;
            color: #FFD700;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #444;
            box-shadow: 0 0 5px #FFD700;
        }
    </style>
</head>
<body>
    <h1>Novo Jogador (CS2)</h1>
    <form action="jogadores-cadastro.php" method="post">
        <label for="nick">Nick:</label>
        <input type="text" name="nick" id="nick" required>

        <label for="patente">Patente:</label>
        <input type="text" name="patente" id="patente">

        <label for="time">Time:</label>
        <input type="text" name="time" id="time">

        <label for="kd">K/D:</label>
        <input type="number" step="0.01" name="kd" id="kd">

        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>