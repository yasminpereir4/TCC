<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="estilos/recuperacaoSenha.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
        <div class="scroll-up-btn">
        <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
        </div>

        <div class="container">
            <div class="form-image">
                <img src="img/esqueciasenha.png" alt="">
            </div>
            <div class="form">
                <form autocomplet="off" id="ForgotPasswordForm">
                    <div class="form-header">
                        <div class="title"> 
                            <h1>Recuperar senha</h1>
                        </div>
                    </div>
                    <div class="form-message" id="msg"></div>

                    <div class="input-group">
                        <div class="input-box">
                            <label>Email</label>
                            <input type="email" name="email" id="email" placeholder="Insira um email" required>
                        </div>
                    </div>
                        <div class="input-field"> 
                            <input type="submit" class="btn-enviar" value="ENVIAR">
                        </div>

                        <div class="signin">
                            <p>Lembrou a senha?<a href="login.php"> Entre aqui!</a></p>
                        </div>
                </form>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#ForgotPasswordForm").on('submit',function(e){
                    e.preventDefault();

                    var email = $("#email").val();

                    $.ajax({
                        type:"POST",
                        url:"forgot_password.act.php",
                        data:{email:email},

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