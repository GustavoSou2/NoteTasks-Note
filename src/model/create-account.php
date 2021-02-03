<?php
session_start();
include("connection.php");
include_once('../../view/create-account-view.php');


$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario.emailUsuario = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../../view/create-account-view.php');
	exit;
}

$sql = "INSERT INTO usuario (nomeUsuario, emailUsuario, senhaUsuario) VALUES ('$nome', '$email', '$senha')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../../view/create-account-view.php');
exit;
?>