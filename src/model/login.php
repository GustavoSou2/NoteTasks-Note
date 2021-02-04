<?php
session_start();

include('../../index.php');
include('connection.php');
include_once('../../view/login-view.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../../view/login-view.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario.idUsuario, nomeUsuario, usuario.emailUsuario, usuario.senhaUsuario from usuario where usuario.emailUsuario = '{$email}' and usuario.senhaUsuario = md5('$senha')";

$result = mysqli_query($conexao, $query);

$array_user = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuário'] = true;
    $_SESSION['name'] = $array_user['nomeUsuario'];
    $_SESSION['id_user'] = $array_user['idUsuario'];
    header("Location: ../../view/panel-view.php");
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../../view/login-view.php');
    exit();
}

?>