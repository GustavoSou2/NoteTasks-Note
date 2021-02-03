<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Gu31000My*');
define('DB', 'notetask');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');


?>