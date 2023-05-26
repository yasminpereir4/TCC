<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/login.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="scroll-up-btn">
        <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
    </div>
        <div class="container">
            <div class="form-image">
                <img src="img/foto1.png" alt="">
            </div>
            <div class="form">
                <form action="login.act.php" method="post" >
                    <div class="form-header">
                        <div class="title"> 
                            <h1>Entre agora</h1>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                        </div>
                        
                        <div class="input-box">
                            <label for="sobrenome">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                            <small><a href="forgot_password.php">Esqueceu a senha?</a></small>
                        </div>
                    </div>
                    <h2>ou</h2>
                    <div class="signin-google">
                        <a href="#"><i class="bi bi-google"></i>Entre com o Google</a>
                    </div>
                        <div class="input-field">
                            <button type="submit">ENTRAR</button>
                        </div>

                        <div class="signup">
                        <p>Ainda não possui cadastro?<a href="cadastro.php"> Cadastre-se aqui</a></p>
                        </div>
                </form>
            </div>
        </div>
</body>
</html>