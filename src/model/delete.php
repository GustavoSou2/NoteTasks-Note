<?php 
session_start();
include_once('connection.php');

$id_notes = intval($_GET['note_id']);

$sql_code = "DELETE FROM notes WHERE notes.idNotes = {$id_notes}";
$result = mysqli_query($conexao, $sql_code);

if($result) {
    header("Location: ../../view/panel-view.php");
    exit();

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


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->