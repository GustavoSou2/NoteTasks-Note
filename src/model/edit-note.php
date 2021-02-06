<?php 
session_start();
include('connection.php');



$id_notes = $_SESSION['id_notes'];

$titulo = (string) $_POST['title-edit'];
$decription = (string) $_POST['description-edit'];
$text = (string) $_POST['text-edit'];

$query = "UPDATE notes SET notes.titleNote = '{$titulo}', notes.descriptionNote = '{$decription}', notes.textNote = '{$text}' WHERE notes.idNotes = {$id_notes} ";
$res = mysqli_query($conexao, $query);


if(!empty($titulo)) {
    if ($result == true) {
        header("Location: ./see-more.php?note_id=" . $id_notes);
        exit();
    }
    else {
        header("Location: ./see-more.php?note_id=" . $id_notes);
        exit();
    }
}
else {
}  
?>

</html>