<?php 
session_start();

include('connection.php');

$titulo = $_POST['title-edit'];
$decription = $_POST['description-edit'];
$text = $_POST['text-edit'];

$query = "";


?>