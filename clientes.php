<?php

require "admin/config.inc.php";

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0) {
    echo "<h3>lista de clientes</h3>";
    while($dados = mysqli_fetch_array($resultado)) {
        echo "<p>Nome: ".$dados['clientes']. " | Cidade: ".$dados['cidade']. " | Estado: ".$dados['estado']. "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>Nenhum cliente cadastrado.</p>";
}


?>