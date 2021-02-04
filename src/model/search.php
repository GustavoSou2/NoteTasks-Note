<?php 
session_start();
include('connection.php');

$field_search = (string) $_POST['search-field'];


$sql_search = "SELECT notes.idNotes, notes.titleNote,notes.descriptionNote, notes.textNote FROM notes INNER JOIN usuario ON notes.idUsuario = usuario.idUsuario WHERE usuario.idUsuario = {$_SESSION['id_user']} and notes.titleNote LIKE '%{$field_search}'";
$resquest = mysqli_query($conexao, $sql_search);

if(!empty($field_search)) {
    $row_request = mysqli_num_rows($resquest);
    if ($row_request == 1) {
        $_SESSION['search'] = true;
        $_SESSION['resquest'] = $resquest;
        header("Location: ../../view/panel-view.php");
        
    } else {
        $_SESSION['search'] = false;
        header("Location: ../../view/panel-view.php");
    }
}
elseif(empty($field_search)) {
    $_SESSION['search'] = false;
    header("Location: ../../view/panel-view.php");
} 

?>