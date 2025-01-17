<?php
session_start();

include_once('connection.php');

$id_notes = intval($_GET['note_id']);

$sql_code = "SELECT notes.idNotes,  notes.titleNote, notes.descriptionNote, notes.textNote FROM notes inner join usuario on notes.idusuario = usuario.idusuario WHERE usuario.idUsuario =  {$_SESSION['id_user']} AND notes.idNotes = {$id_notes}";
$result = mysqli_query($conexao, $sql_code);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="../../public/css/menu-top-bar-style.css">
    <link rel="stylesheet" href="../../public/css/see-more-style.css">
    <title>NoteTasks | Note</title>
</head>

<body>
    <header>
        <div id="container-logo">
            <h1>NoteTasks</h1>
        </div>
        <div id="container-button-user">
            <div class="sub-container-button-user">
                <span id="user-name"><?php echo $_SESSION['name']; ?> <i class="fa fa-user-circle-o"></i></span>
                <div id="log-out-user">
                    <a href="./log-out.php">Sair</a>
                </div>
            </div>
        </div>
    </header>

    <main id="container-see-more">

        <?php if ($row_note = mysqli_fetch_assoc($result)) { ?>
            <div id="content-note-plus">

                <div id="title-note-more"><?php echo $row_note["titleNote"] ?></div>
                <div id="description-note-more"><?php echo $row_note["descriptionNote"] ?></div>
                <div id="text-note-more"><?php echo $row_note["textNote"] ?></div>

                <div id="container-button-close">
                    <a href="javascript: window.location.href='./panel-edit-note.php?note_id=<?php echo $row_note['idNotes'] ?>'" id="content-button-upload-note"> <i class="fa fa-edit"></i> Editar</a>
                    <a href="javascript: window.location.href='../../view/panel-view.php'" id="content-butto-back-page"><i class="fa fa-log-out"></i> Voltar</a>
                </div>
            </div>
        <?php
        } else {
        ?>
            <span id="mensage-error-see-more">
                Não foi possível abrir essa nota
            </span>
        <?php } ?>

    </main>
</body>

</html>