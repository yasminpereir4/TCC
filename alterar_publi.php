<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar publicação</title>
    <link rel="stylesheet" href="estilos/alterar.css">
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
    $id = $_GET['id'];
    $cod = $_GET['cod'];
    require('connect.php');
    $busca = mysqli_query($con,"Select * from `tabpubli` where `id_publi` = '$id'");
    
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
        <legend id="title">Alterar publicação</legend>
        <form action="alterar_publi.act.php" id="form" method="post" enctype="multipart/form-data">   
        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"> &nbsp;
        <input type="hidden" name="cod" id="cod" value="<?php echo $_GET['cod']; ?>"> &nbsp;
        <input type="hidden" name="foto_anterior" value="<?php echo $perfil['fotopubli']; ?>">
        <div class="alteracoes">
        <div class="opcoes">
        <p>Imagem:</p>  
            <div class="col-md-6 side-image">
            <div id="imagePhoto">
           
            <?php
            echo "<img src=$perfil[fotopubli] id='imgPhoto'>";
            ?>
            </div>
            </div>
            <input type="file" name="foto" id="filimage" accept="image/*"></p>
            <script src="js/script.js"></script>
            <div class="itens">
            <p id="desc">Descrição: </p> 
            <p><input type="text" class="inputs" name="descricao" value="<?php echo $perfil['descricao'];?>" ></p>
         </div>
         &nbsp; 
         <div class="btn">
         <input type="submit" value="Alterar" id="btn-gravar">
        </div>
        </div>
        </div>
        </form>
       </div>
       </div>

       <script>
        $(document).ready(function() {
            // Quando o botão for clicado
            $('#btn_gravar').click(function() {
                // Envia uma solicitação AJAX ao arquivo PHP de atualização
                $.ajax({
                    url: 'feed.php',
                    type: 'POST',
                    data: new FormData($('#form')[0]),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Atualiza o conteúdo da publicação com a resposta do servidor
                        $('#form').trigger("reset");
                        $('#imgPhoto').attr('src', response);
                        alert("A publicação foi atualizada com sucesso!");
                    },
                    error: function() {
                        alert('Ocorreu um erro ao atualizar a publicação.');
                    }
                });
            });
        });
    </script>
</body>
</html>