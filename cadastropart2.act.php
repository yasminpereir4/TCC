<!-- <?php

require('connect.php');
extract($_POST);
extract($_FILES);

$endereco = "imgUsuario/".md5(time()).".jpg";
move_uploaded_file($foto['tmp_name'],$endereco);
$senha = md5($senha);

if(mysqli_query($con, "UPDATE `tabela_cadastro` SET `foto` = '$endereco', `bio` = '$bio' WHERE `tabela_cadastro`.`codigo` = '$codigo';")){
            $msg = "Contato gravado com sucesso!";
            }else{
            $msg = "Erro ao gravar!";
            }

    @session_start();
    $_SESSION[] = $msg;

header("location:interesses.php?codigo=$codigo");

?> -->