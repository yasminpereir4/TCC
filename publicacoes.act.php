<?php
require('connect.php');
session_start();
extract($_POST);
extract($_FILES);

$caminho = "imgPublicacoes/".md5(time()).".jpg";
move_uploaded_file($foto['tmp_name'],$caminho);


$curtidas = 0;
if(mysqli_query($con, "INSERT INTO `tabpubli` (`id_publi`, `descricao`,`fotopubli`,`codigo_usuario`,`categoria`, `curtidas`)                      
                                    VALUES (NULL, '$descricao', '$caminho', '$_SESSION[codigo]', '$categoria', '$curtidas');")){
            $msg = "Contato gravado com sucesso!";
                                    }
/*
$stmt = $con->prepare("INSERT INTO `tabpubli` (`descricao`, `fotopubli`, `codigo_usuario`, `categoria`,`curtidas`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param($descricao, $caminho, $_SESSION['codigo'], $categoria, $curtidas);
*/


// if ($stmt->execute()) {
//     $msg = "Contato gravado com sucesso!";
// } else {
//     $msg = "Erro ao gravar! ". mysqli_error($con);
// }



$_SESSION['msg'] = $msg;
header("location:feed.php");
?>