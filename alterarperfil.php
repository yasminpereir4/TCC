<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/alterarperfil.css">
    <title>Alterar</title>
</head>
<body>
    
 <?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }

?>

  <?php

    $codigo = $_SESSION['codigo'];
    require('connect.php');
    $busca = mysqli_query($con,"Select * from `tabela_cadastro` where `codigo` = '$codigo'");
    
    $perfil = mysqli_fetch_array($busca);
  ?>   
   <div class="scroll-up-btn">
            <a href="feed.php" id='back'>
            <svg xmlns="http://www.w3.org/2000/svg" id="icon" height="25px" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
          </svg>  
            </a>
   </div>

    <div class="container">
          <fieldset class="divForm">
          <div class="tudo">
         <legend id="title">Atualizar Cadastro</legend>
         <form action="alterarperfil.act.php" method="post" enctype="multipart/form-data">   
         <input type="hidden" name="codigo" value="<?php echo $perfil['codigo']; ?>"> &nbsp;
         <input type="hidden" name="foto_anterior" value="<?php echo $perfil['foto']; ?>">
         <div class="alteracoes">
          <div class="opcoes">
            <p>Alterar foto:</p>
           
            <div class="col-md-6 side-image">
            <div id="imagePhoto">
            <!-- <input type="hidden" id= "imgPhoto" name="foto_anterior" value="<?php echo $perfil['foto'];?>"> -->
            <?php
            echo "<img src=$perfil[foto] id='imgPhoto'>";
            ?>
 
            </div>
            </div>
            <input type="file" name="foto" id="filimage" accept="image/*"></p>
            <script src="js/script.js"></script>
         <!-- <p><label for="fileFoto" id="lblFoto"></label>
         <input type="file" name="foto" id="fileFoto"></p> -->
          <div class="itens">
         <p>Nome: <input type="text" class="inputs" name="nome" value="<?php echo $perfil['nome'];?>" > </p>
         <p>Descrição: <input type="text" class="inputs" name="bio" value="<?php echo $perfil['bio'];?>" > </p>
         <p>Telefone: <input type="text" class="inputs" name="telefone" value="<?php echo $perfil['telefone'];?>" > </p>
         <p>Email: <input type="text" class="inputs" name="email" value="<?php echo $perfil['email'];?>" > </p>
         </div>
         &nbsp; 
         <div class="btn">
         <input type="submit" value="Gravar" id="btn-gravar">
        </div>
     
         </div>
       
       
 </div>
    </form>
       </div>
       
       </div>


       <script>
    $(document).ready(function() {
        $('#alterarPerfilForm').submit(function(e) {
            e.preventDefault(); // Evita o envio do formulário padrão
            var formData = new FormData(this);

            $.ajax({
                url: 'alterarperfil.act.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Atualizar a biografia na página
                    var novaBiografia = $('#bio').val();
                    $('#biografia').text(novaBiografia);

                    // Exibir mensagem de sucesso
                    alert("Perfil atualizado com sucesso!");
                },
                error: function(xhr, status, error) {
                    // Exibir mensagem de erro
                    alert("Ocorreu um erro ao atualizar o perfil: " + error);
                }
            });
        });
    });
</script>
</script>
</body>
</html>