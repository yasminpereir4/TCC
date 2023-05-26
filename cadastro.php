<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Cadastro</title>

    

    <script>
        // conferir se as senhas são iguais 
        function confereSenha() {
            const senha = document.querySelector('input[name=senha]');
            const confirma = document.querySelector('input[name=confirma]');

            if (confirma.value === senha.value) {
                confirma.setCustomValidity('');
            } else {
                confirma.setCustomValidity('As senhas não conferem');

            }
        }

        function mask(o, f) {
            setTimeout(function() {
            var v = mphone(o.value);
            if (v != o.value) {
                o.value = v;
            }
            }, 1);
            }


        // mascara telefone
        function mphone(v) {
            var r = v.replace(/\D/g, "");
            r = r.replace(/^0/, "");
            if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (r.length > 5) {
                r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (r.length > 2) {
                r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                r = r.replace(/^(\d*)/, "($1");
            }
            return r;
            }
        function myFunction(pass) {

            if(pass=='senha'){
            var a = document.getElementById("senha");
            if (a.type === "password") {
            a.type = "text";
            } else {
            a.type = "password";
            }
            }else{
            var b = document.getElementById("confirmSenha");
            if (b.type === "password") {
            b.type = "text";
            } else {
                b.type = "password";
            }
            }
            //  b.type = "text";
            // b.type = "password";
            //var b = document.getElementById("confirmSenha");
        //var b = document.getElementById("confirmSenha");
}
</script>
</head>
<body>
        <div class="scroll-up-btn">
            <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
        </div>

        <div class="container">
            <div class="form-image">
                <img src="img/foto2.jpeg" alt="">
            </div>
            <div class="form">
                <form action="cadastro.act.php" method="post">
                    <div class="form-header">
                        <div class="title"> 
                            <h1>Cadastre-se</h1>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite seu primeiro nome" required>
                        </div>
                        
                        <div class="input-box">
                            <label for="username">Usuário</label>
                            <input type="text" name="username" id="username" placeholder="Digite seu usuário" value="" >
                        </div>

                        <div class="input-box">
                            <label for="sobrenome">Data de nascimento:</label>
                            <input type="date" id="datanasc" name="datanasc" value='<?php echo date("Y-m-d"); ?>' min="1950-01-01" max="2005-12-31" required>
                        </div>


                        <div class="input-box">
                        <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo" required>
                        <option value="">---</option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                        <option value="outro">Outro</option>
                      
                        </select>
                        </div>
                        
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                        </div>

                        <div class="input-box">
                            <label for="telefone">Telefone</label>
                            <input type="tel" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" required onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                        </div>
                    
                        <div class="input-box">
                            <label for="senha">Senha</label>   
                             <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required onchange='confereSenha();' onkeyup='validarSenhaForca();'>
                            <label for="senha3"> <svg xmlns="http://www.w3.org/2000/svg" id="olho" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg></label>
                            <small id="erroSenhaForca"></small>
                            <input type="checkbox" id="senha3" onclick="myFunction('senha')">
                               <script src="js/personalizado.js"></script>
                        </div>

                        <div class="input-box">
                            <label for="confirma">Confirme sua senha</label>
                            <input type="password" name="confirma" id="confirmSenha" placeholder="Confirme a sua senha" required onchange='confereSenha();'> <br>
                            <label for="senha5"> <svg xmlns="http://www.w3.org/2000/svg" id="olho2" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg></label>
                            <input type="checkbox" id="senha5" onclick="myFunction('confirme')">
                        </div>
                    </div>

                    <div class="checkbox" > 
                    <input type="checkbox" name="opcoes" value="html" required/> De acordo com as Leis 12.965/2014 e 13.709/2018, que regulam o uso da Internet e o tratamento de dados pessoais no Brasil, ao me inscrever autorizo TeachUp a enviar notificações por e-mail ou outros meios e concordo com sua Política de Privacidade.<br/> <br/> 
                
                    </div>
                    <div class="input-field">
                        <a href="politica.php">Politica de privacidade</a> e <a href="termos.php">Termos de uso</a> <br/> 
                        <input type="submit" value="CONTINUAR">
                    </div>

                    <div class="signin">
                        <p>Já possui cadastro?<a href="login.php"> Entre aqui!</a></p>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>