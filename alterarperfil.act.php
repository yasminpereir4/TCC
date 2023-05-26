<?php
extract($_POST);
extract($_FILES);
require('connect.php');

if ($foto['size'] > 0) {
    if ($foto_anterior == "") {
        $endereco = "imgUsuario/" . md5(time()) . ".jpg";
    } else {
        $endereco = $foto_anterior;
    }
    move_uploaded_file($foto['tmp_name'], $endereco);
} else {
    $endereco = $foto_anterior;
}

if (mysqli_query($con, "UPDATE `tabela_cadastro` SET `foto` = '$endereco', `nome` = '$nome', `bio` = '$bio', `telefone` = '$telefone' , `email` = '$email'
 WHERE `tabela_cadastro`.`codigo` = '$codigo';")) {

    $msg = "Perfil alterado com sucesso!";

    // Atualize as informações na sessão também
    session_start();
    $_SESSION['foto'] = $endereco;
    $_SESSION['nome'] = $nome;
    $_SESSION['bio'] = $bio;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['email'] = $email;
} else {
    $msg = "Erro ao alterar perfil.";
}

$_SESSION['msg'] = $msg;
header("Location: feed.php"); // Redirecione para a página do feed ou outra página relevante
exit();
?>