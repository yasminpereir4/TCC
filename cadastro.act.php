<?php

require('connect.php');
extract($_POST);
$senha=md5($senha);
session_start();

$sql = "SELECT * FROM tabela_cadastro WHERE email = '$email'";
$sql2 = "SELECT * FROM tabela_cadastro WHERE username = '$username'";
$resultado = mysqli_query($con, $sql);
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($resultado) == 0) {
    if (mysqli_num_rows($result) == 0) {
        
if(mysqli_query($con, "INSERT INTO `tabela_cadastro` (`codigo`, `nome`,`username`,`datanasc`,`sexo`, `telefone`, `email`, `senha`, `foto`, `bio`)                      
                                    VALUES (NULL, '$nome', '$username', '$datanasc', '$sexo', '$telefone', '$email', '$senha', '$foto', '$bio');")){
            $msg = "Contato gravado com sucesso!";
            $lastId = $con->insert_id;
            }else{
            $msg = "Erro ao gravar!";
            }
    $_SESSION['msg'] = $msg;
    header("location:cadastropart2.php?cod=$lastId");
}else if (mysqli_num_rows($result) != 0 ){
    echo '<script>alert("Usuario já existe");
    window.location.href = "cadastropart2.php";
    </script>';
    
}
}
else if (mysqli_num_rows($resultado) != 0 ) {
        echo '<script>alert("Já existe um email como este")</script>';
    }
?>