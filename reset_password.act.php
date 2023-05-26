<?php 
    include('connect.php');

    if(isset($_POST['email']) || ($_POST['senha']) || ($_POST['confirmSenha'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if(empty($password) || empty($confirmPassword)){
            echo "Há campos vazios";
        }else{
            if($password == $confirmPassword){
                $hashe = md5($password);

                $query = "UPDATE tabela_cadastro SET senha = '$hashe' WHERE email = '$email'";
                $res = mysqli_query($con,$query);

                $query_dlt = "DELETE FROM forgot_password WHERE email ='$email'";
                $res_dlt = mysqli_query($con, $query_dlt);
                
                echo "Sua senha foi atualizada! Clique <a href='login.php'>aqui</a> para entrar!";
            }else{
                echo "Senhas não conferem";
            }
        }
    }
?>