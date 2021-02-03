<?php 
session_start();
include('connection.php');
include('../../view/panel-view.php');

$id_note = intval($_SESSION['id_note']);

$sql_code = "DELETE FROM notes WHERE idNotes = {$id_note}";
$result = mysqli_query($conexao, $sql_code);

if($result == 1) {
    echo "
    <script type='javascript'>
        window.location.href='NoteTasks/view/panel-view.php';
    </script>
    ";
}
else {
    echo "
    <script type='javascript'>
        alert('Não foi possível deletar a anotação');
        window.location.href='../../view/panel-view.php';
    </script>
    ";
}



?>