<?php

if (!isset($_SESSION['usuário'])) {
    header('Location: ../../view/login-view.php');
    exit();
}
?>