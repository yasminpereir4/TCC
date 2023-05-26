<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/meuperfil.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Meu Perfil</title>
</head>
<body>
 
<div class="wrapper">

<?php
 require('connect.php');
 session_start();
 
 if (isset($_GET['cod'])) {
  $id_publi = $_GET['id'];
  $codigo = $_GET['cod'];
 
   $query = "SELECT * FROM tabpubli WHERE id_publi = '$id_publi'";
   $resultado = mysqli_query($con, $query);
 
   if ($resultado) {
     $publicacao = mysqli_fetch_assoc($resultado);
 
     $codigo = $publicacao['codigo_usuario'];
 
     $query = "SELECT * FROM tabela_cadastro WHERE codigo = '$codigo'";
     $resultado = mysqli_query($con, $query);
 
     if ($resultado) {
       $usuario = mysqli_fetch_assoc($resultado);
 
       echo "<div class='perfil'>";    
       echo "<div class='capa'>"; 
       echo "</div>";
       echo "<div class='meuperfil'>";
       echo "<div class='fotoPerfilGrande'>";
       echo "<img src=$usuario[foto] id='fotoPerfilImg'>";
       echo "</div>";
       echo "<div class='bio'>";
          echo "<h1> $usuario[nome]</h1>";
          echo "<p>$usuario[bio]</p>";
          echo "</div>";
    
     } else {
       echo "Erro ao executar consulta: " . mysqli_error($con);
     }
   } else {
     echo "Erro ao executar consulta: " . mysqli_error($con);
   }
 } else {
   echo "ID da publicação não definido.";
 }
?>

<div class="botoes">
 <form id="form-botao2">
 <button id="botao2" name="botao2">Publicacoes</button>
 <!-- elemento para exibir o conteúdo -->
 </form>
</div>
 <div id="conteudo"></div>
 <div class="scroll-up-btn">
            <a href="feed.php" id='back'>
            <svg xmlns="http://www.w3.org/2000/svg" id="icon" height="25px" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
          </svg>  
            </a>
        </div>      
 <script>


$('#form-botao2').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url: "publicacoes.php?id=" + <?php echo $publicacao['id_publi'];?> + "&user=" + <?php echo $publicacao['codigo_usuario']; ?>,
      type: 'post',
      data: {botao2: true},
      success: function(response) {
        $('#conteudo').html(response);
      }
    });
  });


</script>

</body>
 



