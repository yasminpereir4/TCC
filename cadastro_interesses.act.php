<?php
@session_start();
include('connect.php');
extract($_POST);
extract($_FILES);

$codigo = $_GET['cod'];

extract($_POST);
$interesses = implode(';',$interesses,);
mysqli_query($con, "INSERT INTO `interesses` (`id_interesse`, `nome_interesse`, `codigo_usuario`) 
VALUES (NULL, '$interesses', '$codigo');");


// var_dump($interesses);


header("location:login.php");
?>
