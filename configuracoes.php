<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos/configuracoes.css">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
    <h1>TeachUp</h1>
        <ul>

        
            <li>
                <a href="#">
                    <!-- <span class="icon"><i class="fa-solid fa-house"></i></span> -->
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <span class="title">Editar perfil</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <!-- <span class="icon"><i class="fa-solid fa-user"></i></span> -->
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <span class="title">Alterar senha</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-comment"></i></span>
                    <span class="title">Privacidade e Segurança</span>
                </a>
            </li>
            <li>
                <a href="ajuda.php">
                    <span class="icon"><i class="fa-solid fa-circle-question"></i></span>
                    <span class="title">Ajuda</span>
                </a>
            </li>
           
            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <span class="title">Excluir conta</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                   <a href="feed.php"> <span class="title">Sair</span></a>
                </a>
            </li>
        </ul>
    </div>

    <!-- //menuzinho -->
    <div class="toggle" onclick="toggleMenu();"></div>
    <script type="text/javascript">
        function toggleMenu(){
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            navigation.classList.toggle('active');
            toggle.classList.toggle('active');
        }
    </script>
    
 <?php
    // @session_start();
    // if(isset($_SESSION['msg'])){
    //     echo "<p class=alert>$_SESSION[msg]</p>";
    //     unset($_SESSION['msg']);
    // }

?>
  <?php
    // $codigo = $_GET['codigo'];
    // require('connect.php');
    // $busca = mysqli_query($con,"Select * from `bdtcc` where `codigo` = '$codigo'");
    // $cadastro = mysqli_fetch_array($busca);
  ?>
    
    <!-- <fieldset class="divForm">
    <legend>Editar perfil</legend>
    <form action="configuracoes.act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="codigo" value="<?php echo $cadastro['codigo'];?>">
        
        <p><label for="fileFoto" id="lblFoto">Foto</label>
        <input type="file" name="foto" id="fileFoto"></p>
        <p>Nome: <input type="text" name="nome" value="<?php echo $cadastro['nome'];?>" > </p>
        <p>Sobrenome: <input type="text" name="email" value="<?php echo $contato['sobrenome'];?>" > </p>
        <p>Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone'];?>" > </p>
        <p>Email: <input type="text" name="telefone" value="<?php echo $contato['email'];?>" > </p>
        <p><input type="submit" value="Gravar"></p>

    </form> -->


</body>
</html>