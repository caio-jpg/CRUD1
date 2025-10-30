<?php
include('config.inc.php');
$nick = $_POST['nick'];
$patente = $_POST['patente'];
$time = $_POST['time'];
$kd = $_POST['kd'];
$pais = $_POST['pais'];
$sql = "INSERT INTO jogadores (nick, patente, time, kd, pais) VALUES ('$nick', '$patente', '$time', '$kd', '$pais')";
mysqli_query($conexao, $sql);
header('Location: jogadores-admin.php');
?>