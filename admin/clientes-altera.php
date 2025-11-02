<?php
include('config.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? 0;
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $estado = $_POST['estado'] ?? '';

    if ($id && $nome && $cidade) {
        $sql = "UPDATE clientes SET nome='$nome', cidade='$cidade', estado='$estado' WHERE id='$id'";
        if(mysqli_query($conexao, $sql)){
            echo "<h2>Cliente alterado com sucesso!</h2>";
            echo "<a href='clientes-admin.php'>Voltar</a>";
        } else {
            echo "<h2>Erro ao alterar cliente: ".mysqli_error($conexao)."</h2>";
            echo "<a href='clientes-admin.php'>Voltar</a>";
        }
    } else {
        echo "<h2>Erro: Dados inválidos.</h2>";
        echo "<a href='clientes-admin.php'>Voltar</a>";
    }
} else {
    echo "<h2>Erro: Formulário não enviado corretamente.</h2>";
    echo "<a href='clientes-admin.php'>Voltar</a>";
}

mysqli_close($conexao);
?>