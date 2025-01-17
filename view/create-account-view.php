<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="../public/css/menu-top-bar-style.css">
    <link rel="stylesheet" href="../public/css/create-account-style.css">
    <title>NoteTasks | Cadastrar-se</title>
</head>

<body>
    <header>
    <div id="container-logo">
        <h1>NoteTasks</h1>
    </div>
    </header>
    <main>
        <section id="container-section-form-login">
            <div id="background-form">
                <h2>Cadastro</h2>
                <i class="fa fa-user-circle-o"></i>
                <form action="../src/model/create-account.php" method="POST">
                    <label for="name" class="field-label-input"> <i class="fa fa-user"></i>
                        <input type="text" name="nome" id="name" placeholder="Nome de usuário" class="input-field-login">
                    </label>
                    <label for="name" class="field-label-input"> <i class="fa fa-user"></i>
                        <input type="text" name="email" id="name" placeholder="E-mail" class="input-field-login">
                    </label>
                    <label for="password" class="field-label-input"> <i class="fa fa-lock"></i>
                        <input type="password" name="senha" id="password" placeholder="Senha " class="input-field-login">
                    </label>

                    <span id="mensage-link">Já tem uma conta? <a href="./login-view.php">Logar.</a></span>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
        </section>
    </main>


</body>

</html>