<?php

if (!isset($_SESSION)) {
    header('Location: ../../view/login-view.php');
    exit();
}
?>