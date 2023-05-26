<?php
extract($_POST);
extract($_FILES);
require('connect.php');


if (isset($interesses) && is_array($interesses)) {
    $interesses_limpos = array_map(function($interesse) use ($con) {
        return mysqli_real_escape_string($con, $interesse);
    }, $interesses);

    $interesses_string = implode("','", $interesses_limpos);

    if(mysqli_query($con, "DELETE FROM `interesses` WHERE `codigo_usuario` = '$codigo';")) {
        foreach ($interesses_limpos as $interesse) {
            mysqli_query($con, "INSERT INTO `interesses` (`codigo_usuario`, `nome_interesse`) VALUES ('$_SESSION('codigo')', '$interesse');");
        }

        $msg = "Interesses alterados com sucesso!";
    } else {
        $msg = "Erro ao alterar interesses.";
    }
} else {
    $msg = "Nenhum interesse selecionado.";
}

mysqli_close($con);

session_start();
$_SESSION['msg'] = $msg;
header("location: feed.php");
exit();
?>
