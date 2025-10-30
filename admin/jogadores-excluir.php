<?php
include('config.inc.php');
$id = $_GET['id'];
mysqli_query($conexao, "DELETE FROM jogadores WHERE id=$id");
header('Location: jogadores-admin.php');
?>