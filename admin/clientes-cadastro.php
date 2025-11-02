<?php
include('config.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $estado = $_POST['estado'] ?? '';

    if ($nome && $cidade) {
        $sql = "INSERT INTO clientes (nome, cidade, estado) VALUES ('$nome', '$cidade', '$estado')";
        if(mysqli_query($conexao, $sql)){
            echo "<h2>Cliente cadastrado com sucesso!</h2>";
            echo "<a href='clientes-admin.php'>Voltar</a>";
        } else {
            echo "<h2>Erro ao cadastrar cliente: ".mysqli_error($conexao)."</h2>";
            echo "<a href='clientes-cadastro-form.php'>Voltar</a>";
        }
    } else {
        echo "<h2>Erro: Nome e Cidade são obrigatórios!</h2>";
        echo "<a href='clientes-cadastro-form.php'>Voltar</a>";
    }
} else {
    echo "<h2>Erro: Formulário não enviado corretamente.</h2>";
    echo "<a href='clientes-cadastro-form.php'>Voltar</a>";
}

mysqli_close($conexao);
?>