<?php
include('config.inc.php');
$id = $_POST['id'];
$nick = $_POST['nick'];
$patente = $_POST['patente'];
$time = $_POST['time'];
$kd = $_POST['kd'];
$pais = $_POST['pais'];
$sql = "UPDATE jogadores SET nick='$nick', patente='$patente', time='$time', kd='$kd', pais='$pais' WHERE id=$id";
mysqli_query($conexao, $sql);
header('Location: jogadores-admin.php');
?>