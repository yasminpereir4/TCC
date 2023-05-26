<?php

    require('connect.php');

    if(isset($_POST['email'])){
        $email = $_POST['email'];

        $query = "SELECT * FROM  tabela_cadastro WHERE email = '$email'";
        $r = mysqli_query($con,$query);

        if(empty($email)){
            echo "Campo está vazio";
        }else{
            if(mysqli_num_rows($r) > 0){
                $token = uniqid(md5(time()));

                $insert_query = "INSERT INTO forgot_password(email, token) VALUES ('$email', '$token')";
                $res = mysqli_query($con, $insert_query);

                echo "Clique <a href='resetPassword.php?token=$token'>aqui<a/> para alterar sua senha";
            }else{
                echo "Usuário não encontrado";
            }
        }
    }
?>