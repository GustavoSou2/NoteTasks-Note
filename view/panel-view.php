<?php
session_start();

include("../src/model/connection.php");


$consult = "SELECT notes.idNotes,  notes.titleNote, notes.descriptionNote, notes.textNote FROM notes inner join usuario on notes.idusuario = usuario.idusuario WHERE usuario.idUsuario =  {$_SESSION['id_user']}  ";
$res = mysqli_query($conexao, $consult);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="../public/css/painel-style.css">
    <title>NoteTasks | note</title>
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
                    <a href="../src/model/log-out.php">Sair</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div id="container-elements-btn">
            <div id="content-elements">
                <div id="container-search-element">
                    <label for="search" id="search-field">
                        <i class="fa fa-search"></i>
                        <input type="search" name="search" placeholder="pesquise..." id="search">
                    </label>
                </div>
                <div class="container-button-add-note">
                    <div class="content-add-note">
                        <span id="comment-button-add"></i> add anotação</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- form - new note -->
        <div class="container-form-new-note hidden">
            <div class="content-form-new-note">
                <h2>Nova anotação</h2>
                <form action="../src/model/add-note.php" method="POST" id="form-new-note">
                    <input type="text" name="title" maxlength="20" id="title" placeholder="Título">

                    <input type="text" name="sub-title" maxlength="45" id="sub-title" placeholder="Descrição">

                    <textarea name="note" id="note" placeholder="Anotação" maxlength="300"></textarea>

                    <div id="container-button-form">
                        <input type="submit" value="Enviar <?php $_SESSION['addNote'] = true?>">
                        <input type="button" value="Cancelar" id="button-cancel">
                    </div>
                </form>
            </div>
        </div>

        <!-- conteúdo -->
        <section id="container-notes">
            <?php $row = mysqli_num_rows($res);
            if ($row == 0) {
            ?>
                <span class="mensage-null"><?php echo "Você não tem nenhuma anotação"; ?></span>
            <?php } ?>

            <?php while ($note = mysqli_fetch_assoc($res)) { ?>
                <div id="content-note">
                    
                    <div id="title-note"><?php echo $note["titleNote"]; ?></div>
                    <div id="description-note"><?php echo $note["descriptionNote"]; ?></div>
                    <div id="text-note"><?php echo $note["textNote"]; ?></div>

                    <div id="container-button-delet-note">
                        <a href="javascript: window.location.href='../src/model/delete.php/<?php echo $note['idNotes'] ?>'<?php $_SESSION['id_note'] = $note['idNotes']; ?>" id="content-button-delet">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="../public/js/panel-script.js"></script>
</body>

</html>