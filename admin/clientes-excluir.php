<?php
include('config.inc.php');

$id = $_GET['id'] ?? 0;

if ($id) {
    $sql = "DELETE FROM clientes WHERE id='$id'";
    if(mysqli_query($conexao, $sql)){
        echo "<h2>Cliente excluído com sucesso!</h2>";
        echo "<a href='clientes-admin.php'>Voltar</a>";
    } else {
        echo "<h2>Erro ao excluir cliente: ".mysqli_error($conexao)."</h2>";
        echo "<a href='clientes-admin.php'>Voltar</a>";
    }
} else {
    echo "<h2>ID inválido.</h2>";
    echo "<a href='clientes-admin.php'>Voltar</a>";
}

mysqli_close($conexao);
?>
