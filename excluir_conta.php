<?php
    require('connect.php');

    echo $codigo = $_SESSION['codigo'];

    $busca = mysqli_query($con,"SELECT * FROM `tabela_cadastro` WHERE  `codigo` = '$codigo';");
    $conta =mysqli_fetch_array($busca);
    unset($conta['foto']);
    if(mysqli_query($con,"DELETE FROM `tabela_cadastro` WHERE `codigo` = '$codigo';")){
        echo '<script>alert("Conta excluída definitivamente");
        window.location.href="index.php";
        </script>';
    }else{
        echo '<script>alert("Não foi possível excluir");
        window.location.href="feed.php";
        </script>';
    }
    @session_start();
?>