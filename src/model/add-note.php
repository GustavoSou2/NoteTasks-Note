<?php 
session_start();

include('connection.php');



$title = trim(utf8_encode($_POST["title"]));
$description = trim(utf8_encode($_POST["sub-title"]));
$text = trim(utf8_encode($_POST["note"]));
$idUser = $_SESSION['id_user'];

$query = "INSERT INTO notes (idUsuario, titleNote, descriptionNote, textNote)  VALUE ('{$idUser}', '{$title}', '{$description}', '{$text}')";
$res = mysqli_query($conexao, $query);


if ($res == true) {
    header("Location: ../../view/panel-view.php");
    exit();
} else {
    echo "Não foi posssível enviar a anotação";
}

?>