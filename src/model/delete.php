<?php 

include_once('connection.php');
include_once('../../view/panel-view.php');

$id_note = intval($_SESSION['id_note']);

$sql_code = "DELETE FROM notes WHERE idNotes = {$id_note}";
$result = mysqli_query($conexao, $sql_code);

if($result) {
    echo "
    <script type='javascript'>

        window.location.href='../../view/panel-view.php';
    </script>
    ";
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