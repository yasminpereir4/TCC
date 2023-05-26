<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/meuperfil.css">
    <title>Meu Perfil</title>
</head
<body>
 
<div class="wrapper">

    <?php
     @session_start();     
          echo "<div class=perfil>";    
          echo "<div class='meuperfil'>";
          echo "<div class='fotoPerfilGrande'>";
          echo "<img src=$_SESSION[foto] id='fotoPerfilImg'>";
          echo "</div>";
          echo "<div class='bio'>";
          echo "<h1> $_SESSION[nome]</h1>";
          
          echo "<p>$_SESSION[bio]</p>";
     
          echo "</div>";  
          
         

        //   echo "<p> $_SESSION[email]</p>";
        //   echo "<p><a href=alterarPerfil.php?cod=$_SESSION[codigo]>Alterar</a>";
          
    ?>
 
        
   
       <!-- BOTOES DE PUBLI E SALVOS -->
      

       <div class="opcs">
       <div class="botoes">

          <form id="form-botao1">
          <button id="botao1" name="botao1" value="<?php echo $_SESSION['codigo']?>">SALVOS</button>
          <!-- elemento para exibir o conteúdo -->
          </form>
        

          <form id="form-botao2">
          <button id="botao2" name="botao2">PUBLICAÇÕES</button>
          <!-- elemento para exibir o conteúdo -->
          </form>
          
        </div><div id="conteudo"></div>
        </div>
        <div class="scroll-up-btn">
            <a href="feed.php" id='back'>
            <svg xmlns="http://www.w3.org/2000/svg" id="icon" height="25px" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
          </svg>  
            </a>
        </div>      
      
</div> 
  
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <div class="opcs">
    
<script>
// enviando uma solicitação AJAX para o arquivo PHP quando um botão for clicado.
$(document).ready(function() {

  $('#form-botao1').on('submit', function(e) {
    e.preventDefault();
    var botao = $('#botao1').val()
    $.ajax({
      url: 'meussalvos.php?cod='+botao,
      success: function(response) {
        $('#conteudo').html(response);
      }
    });
  });

  $('#form-botao2').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url: 'minhaspublicacoes.php',
      type: 'post',
      data: {botao2: true},
      success: function(response) {
        $('#conteudo').html(response);
      }
    });
  });
});
    
    </script>

<?php
if (isset($_POST['botao1'])) {
  echo "Conteúdo do botão 1";
} elseif (isset($_POST['botao2'])) {
  echo "Conteúdo do botão 2";
}
?>


<!-- ACABA BOTOES SALVOS E PUB  -->

         
       

        <!-- <?php include('publicacoes.php'); 
            @session_start();
?> -->
         <!-- <div class="pub"> 
            
             <img src="./img/mark.png">
             <img src="./img/mark.png">
             <img src="./img/mark.png">
             <img src="./img/mark.png">
             <img src="./img/mark.png">
             

         </div> -->
         <script src="https://kit.fontawesome.com/df05055cb2.js" crossorigin="anonymous"></script>
         <script src= "temadarkfeed.js"> </script>
        </div>
    
</body>
</html>