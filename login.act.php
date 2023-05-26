<?php

extract($_POST);
$senha = md5($senha);

require('connect.php');
$busca = mysqli_query($con, "Select * from `tabela_cadastro` where `email` = '$email'");
session_start();
if($busca->num_rows == 1){
    $cadastro = mysqli_fetch_array($busca);
    if($senha === $cadastro['senha']){
        $_SESSION['login'] = true;
        $_SESSION = $cadastro;
        header("location:feed.php");
    }else{
        echo '<script>alert("Algo deu errado, certifique os dados!");
        window.location.href="login.php";
        </script>';
    }
}else{
    echo '<script>alert("Não há cadastros com este email.");
        window.location.href="login.php";
        </script>';
}

@session_start();