<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar senha</title>
    <link rel="stylesheet" href="estilos/recuperacaoSenha.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
</head>
<body>
    <?php
        include('connect.php');
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            $query = "SELECT * FROM forgot_password WHERE token = '$token'";
            $r= mysqli_query($con, $query);

            if(mysqli_num_rows($r) >0){
                $row = mysqli_fetch_array($r);
                $email = $row['email'];
            }
        }
    ?>


        <div class="scroll-up-btn">
            <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
        </div>

        <div class="container">
            <div class="form-image">
                <img src="img/mudarSenha.png" alt="">
            </div>
            <div class="form">
                <form autocomplete="off" id="ResetPasswordForm">
                    <div class="form-header">
                        <div class="title"> 
                            <h1>Alterar senha</h1>
                        </div>
                    </div>
                    <div class="form-message" id="msg"></div>

                    <div class="input-group">

                        <div class="input-box">
                            <label for="email">Email</label>   
                            <input type="email" name="email" id="email"  value="<?php echo $email;?>" required>
                        </div>

                        <div class="input-box">
                            <label for="senha">Senha</label>   
                            <input type="password" name="senha" id="password" placeholder="Digite sua nova senha" required>
                        </div>

                        <div class="input-box">
                            <label for="confirma">Confirme sua senha</label>
                            <input type="password" name="confirma" id="confirmPassword" placeholder="Confirme a sua senha" required>
                        </div>
                    </div>
                        <div class="input-field"> 
                            <input type="submit" class="btn-enviar" value="ALTERAR">
                        </div>
                </form>
            </div>
        </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#ResetPasswordForm").on('submit', function(e){
                e.preventDefault();
                
                var email = $("#email").val();
                var password = $("#password").val();
                var confirmPassword = $("#confirmPassword").val();

                $.ajax({
                    type:"POST",
                    url: "reset_password.act.php",
                    data: {email:email, password:password, confirmPassword:confirmPassword},

                    success:function(data){
                        $(".form-message").css("display","block");
                        $(".form-message").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>