<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/temadarkfeed.js"></script>
    <title>TeachUp</title>
</head>
<html>

<body class="light-theme">
<?php include_once("lib2/includes.php");?>
<?php require('connect.php'); ?>
    
<?php
        @session_start();
        $cod = $_SESSION['codigo'];
        $interesses = mysqli_query($con, "SELECT nome_interesse FROM interesses WHERE codigo_usuario = '$cod'");
        $interesse = mysqli_fetch_array($interesses);
        $interesse = explode(';',$interesse[0]);
        $interesseA = implode("' OR tabpubli.categoria = '",$interesse);
        


     ?>

    <!--NAVBAR-->
    <div class="sidebar2">
    <nav class="sidebar">
        <ul>
            <li>
            <a href="meuperfil.php" class="foto">
                <?php echo "<img src=$_SESSION[foto]>";?>
                <span class="nav-item"><?php  echo "$_SESSION[username]";?></span>
            </a>
            </li>
            <li>

          
           
            </li>
            <li><a href="feed.php">
               
                <i class="bi bi-house-fill"></i> 
               
                <span class="nav-item">Início</span>
            </a></li> <br>
            <li><button type="button" class="btn-newPubli" data-toggle="modal" data-target="#exampleModal">
            <i class="bi bi-pencil-square" id="button-publi"></i>
             <span class="nav-item">Publicar</span>
            </button>
            </li> <br>
            <li><a href="meuperfil.php">
                <i class="bi bi-person-fill"></i>
                <span class="nav-item">Perfil</span>
            </a></li>
            <li><a href="patrocinios.php">
                <i class="bi bi-bell-fill"></i>
                <span class="nav-item">Patrocínios</span>
            </a></li>
          
            <li><a href="hobbies.php">
                <i class="bi bi-puzzle-fill"></i>
                <span class="nav-item">Hobbies</span>
            </a></li>

           

  <li><a href="ajuda.php">
                <i class="bi bi-question-circle-fill"></i>
                <span class="nav-item">Ajuda</span>
            </a></li> 
            

<br><br><br><br><br><br><br>
            <li class="dropmenu">
                <i class="bi bi-gear-fill"></i>
                <span class="nav-item">Configurações</span>
                <ul class="submenu">
                    <li><a href="alterarperfil.php">
                    <i class="bi bi-person-lines-fill"></i>
                    <span class="nav-item">Alterar perfil</span></a></li>
                    <li><a href="excluir_conta.php">
                    <i class="bi bi-person-x-fill"></i>
                    <span class="nav-item">Excluir conta</span></a></li>
                    <li><a href="logoff.php" class="logout">
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="nav-item">Sair</span></a></li>
                    <li>
                    <div>
                     <input type="checkbox" class="checkbox" onclick="toggleDarkMode();" id="toggleBtn" />
                     <label class="switch" for="toggleBtn">
                     <svg xmlns="http://www.w3.org/2000/svg" id="sun" height="3vh" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                     <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" /></svg>
                     <svg xmlns="http://www.w3.org/2000/svg" id="moon" height="3vh" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16"><path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/></svg>
                     <div class="ball"></div>
                     </label>
                    </div>
                    </li>
                </ul>
            </li>


          


        </ul>
    </nav>
</div>
    <!-- END - NAVBAR -->


   
    <!-- FIM CARD - MOSTRAR AMIGOS -->

    <!-- CARD - CATEGORIAS -->
        <!-- <div class="face3">
            <div class="card5">
            <p id="patroTitulo">Categorias</p>
            <div class="lista-amigos">
            <div class="categorias">
            <input id="botao1" type="button" value="Esporte" onclick="mudarCor('#009516')"/>
            <input id="botao2" type="button" value="Tecnologia" onclick="mudarCor('#000c95')"/>
            <input id="botao3" type="button" value="Arte" onclick="mudarCor('#952f00')"/>
            </div>
            <div class="categorias">
            <input id="botao4" type="button" value="Moda" onclick="mudarCor('#95008d')"/>
            <input id="botao5" type="button" value="Culinária" onclick="mudarCor('#beb800')"/>
            <input id="botao6" type="button" value="Música" onclick="mudarCor('#ff0000')"/>
            </div>
            </div>
        </div> -->
           <!-- END CARD - CATEGORIAS -->

    <!-- PUBLICAÇÕES -->

   <?php include('pesquisar.php'); ?>

        <div class="teste">
        <!-- <div class="Custom__Carousel____Container___051">
            <div class="Slides_Wrapper ">
<?php
$buscas = "SELECT * FROM `tabela_cadastro`";
$busca = mysqli_query($con , $buscas);
while($usuarios = mysqli_fetch_array($busca)){
?>
    
               <div class="slide">
                    <div class="card3">
              <div class="amgs">
              <div class="amigos">
              <?php  echo "<img src=$usuarios[foto] id='imgPerfil'>";?>
             </div>
             <div class="titulosAmgs">
             <p> <a href='perfil.php?cod=$usuarios[codigo]'><?php echo $usuarios['username']; ?> </a> </p>
             </div>
             </div>
              </div>
                   
               </div>
               <?php
}
?>
             
               </div>
               <a id="heroPrev" onclick="PrevSlide(this)" class="prev hero_-nav disable-button">&#10094</a>
               <a id="heroNext" onclick="NextSlide(this)" class="next hero_-nav">&#10095</a>
        
    
</div> 

<script src="carousel.js"></script> -->


        

             <!-- <section class="sec2">
        <div class="face">
        <div class="card3">
            <div class="amgs">
            <div class="amigos">
            <img src="img/user.png" alt="">
            <img src="img/user.png" alt="">
            <img src="img/user.png" alt="">
            <img src="img/user.png" alt="">
        
        </div>
        <div class="titulosAmgs">
        <p>Amigo</p>
        <p>Amigo</p>
        <p>Amigo</p>
        <p>Amigo</p>
        </div>
        </div>
        </div>

        </section> -->

           
        <!-- CAMPO PARA PUBLICAR -->
            <div class="feedPublicacao">


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="publicacoes.act.php" method="post" enctype="multipart/form-data">
            <div class="perfilPublicar">
            <?php  echo "<img src=$_SESSION[foto] id='imgPerfil'>";?>
            <?php  echo "<h2 class='text-dark'> $_SESSION[nome]</h2>";?>
            </div>
            <textarea type="text" rows="4" cols="40" placeholder="Compartilhe suas ideias... :]" id="text-publicar" name="descricao"></textarea>
            <div class="btnsPerfil">
            <input type="file" name="foto" id="filimage" accept="image/*">
          
            <div id="imagePhoto">
            <img src="./img/camera.png" alt="Selecione uma imagem" id="imgPhoto">
            
            <select class="publi" id="categoria" name="categoria" required>
                <option value="">Escolha:</option>
                <option value="Esporte">Esporte</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Arte">Arte</option>
                <option value="Moda">Moda</option>
                <option value="Culinaria">Culinaria</option>
            </select>
            <br>
        </div>
            </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

        <input class="publi" id="btn-publicar" type="submit" value="Publicar"> 
        <script src="js/script.js"></script>

       </form>
      </div>
    </div>
  </div>
</div>
        <form method="post" enctype="multipart/form-data"> 
        <?php
        
         
//  MOSTRAR PUBLICAÇÕES
$buscaa = "SELECT * FROM tabela_cadastro INNER JOIN 
tabpubli ON tabela_cadastro.codigo = tabpubli.codigo_usuario AND (tabpubli.categoria =  '$interesseA') ORDER BY id_publi DESC";
$publicacoes = mysqli_query($con , $buscaa);
while($publicacao = mysqli_fetch_array($publicacoes)){
echo "<div class=\"container-main\">";
echo "<div class=\"separar\">";
echo "<div class=\"perfilPublicacao\">";
echo "<img src=$publicacao[foto] id='fotoperfil'>";

echo "<a id='namecoment' href='perfil.php?id=$publicacao[id_publi]&cod=$publicacao[codigo]'>$publicacao[username]</a>";

echo "</div";
echo "</div";

if($publicacao['codigo_usuario'] == $_SESSION['codigo']){
echo "<nav class='menudrop'>";
echo "<ul class=\"excluirPublicacao\">";
echo "<li><a href='#' class='trespontos' ><i class='bi bi-three-dots' id='trespontos'></i></a>";
echo "<ul>";
echo "<li id='alterar'><a href='alterar_publi.php?id=$publicacao[id_publi]&cod=$_SESSION[codigo]'>Alterar</a></li>";
echo "<li id='excluir'><a href='excluir_publi.php?id=$publicacao[id_publi]&cod=$_SESSION[codigo]'>Excluir</a></li>";
echo "</ul>";
echo "</li>";
echo "</ul>";
}  
echo "</nav>";
echo "<p id='descricao'>$publicacao[descricao]</p>";
echo "<img src=$publicacao[fotopubli] id='fotopubli'>";
echo "</div>";
echo "</div>";
//  CURTIDAS
echo "<div class=\"reacoes\">"; 
?>
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg> -->
<?php
echo "<p class='curtir' id='like' data-publi=$publicacao[id_publi]>
<img src='img/heart-fill.svg' class='curtir' id='curtida'>
$publicacao[curtidas]</p>";

   
//  SALVAR
echo "<form action='salvar_publi.php' method='POST'>";    
echo "<button id='btn-save' type='submit'><img src='img/bookmark-fill.svg' id='saved'>Salvar</button>";
echo  "<input type='hidden' name='id_publi' value=$publicacao[id_publi]>";
echo "</form>";
echo  "</div>";
?>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  function salvarPublicacao(id_publi) {
    $.ajax({
      url: 'meussalvos.php',
      type: 'POST',
      data: {id_publi: id_publi},
      success: function(response) {
        // Lógica de sucesso (opcional)
        console.log('Publicação salva com sucesso!');
      },
      error: function() {
        // Lógica de erro (opcional)
        console.log('Erro ao salvar a publicação.');
      }
    });
  }
</script>



<!-- COMENTÁRIOS  -->
<?php
@session_start();
$_SESSION['codigo'];
?>
<!-- Formulário de comentário -->
<form method="POST" action="comentarios.act.php">
<div class="comen-tarios"> <br><br><br>
<input type="hidden" name="codpost" value="<?php echo $publicacao['id_publi']?>">
 <textarea placeholder="Digite um comentário:" name="comentario" rows="4" cols="50"></textarea><br>
 <input class="btn-comentar" type="submit" value="Postar">
</div>    
</form>

<?php
// Recupera os comentários do banco de dados
$query = "SELECT * FROM tabcoment WHERE codpost = $publicacao[id_publi]";
$resultado = mysqli_query($con, $query);

// Exibe os comentários
if (mysqli_num_rows($resultado) > 0) {
// echo "<h5>Comentários:</h5>";
while ($row = mysqli_fetch_assoc($resultado)) { 
$id_comment = mysqli_query($con, "SELECT * FROM tabela_cadastro WHERE codigo = '$row[codusuario]'");
$users = mysqli_fetch_array($id_comment);
echo "<div class='comentario'>";
echo "<img src=$users[foto] id='fotocoment'>";
echo "<a href='perfil.php?id=$users[codigo]' id='namecoment'>" . $users['username'] . "</a>";



echo "<p id='coment'>" . $row['comentario'] . "</p>";
echo "<p class='curtir' id='like' data-publi=$publicacao[id_publi]>
<img src='img/heart-fill.svg' id='likecoment'>
$publicacao[curtidas]</p>";
echo "</div>";
}
} else {
echo "<br>";
echo "<p>Nenhum comentário publicado ainda.</p>";
} 

echo  "</div>";
}
echo  "</div>";
?> 
     
            </div>
        
          

            <!-- END - COMENTARIOS -->

    <!-- ESCOLHA DOS INTERESSES -->
        <!-- <?php
    session_start();
    include('connect.php'); 

    $sql = "SELECT * FROM tabpubli WHERE ";
    $interesses = mysqli_query($conexao, "SELECT nome_interesse FROM interesses WHERE codigo_usuario = $_SESSION[codigo]");

    while ($interesse = mysqli_fetch_array($interesses)) {
    $sql .= "interesses LIKE '%$interesse[nome_interesse]%' OR ";
    }
    $sql = rtrim($sql, "OR ");
    $resultado = mysqli_query($connect, $sql);
    while ($publicacao = mysqli_fetch_array($resultado)) {
    }
    ?> -->

    <!--LINK - JAVASCRIPT-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/df05055cb2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="libs/jquery-3.6.4.min.js"></script>
        <script>

    // FUNCTIONS - JAVASCRIPT
        function mudarCor(cor){
        // referencia o primeiro 'h1' do layout html
        const fundo = document.getElementsByClassName('sidebar')[0];
        const fundoPub = document.getElementsByClassName('publicar')[0];
        fundo.style.background = cor;  
        fundoPub.style.background = cor;
        }
        </script>

<script>
    btCurtir = document.querySelectorAll('p.curtir');
    btCurtir.forEach(element => {
        element.addEventListener('click', () => {
            id = element.dataset.publi;
            $.ajax({
                url: "curtida.act.php?id=" + id + "&user=" + <?php echo $_SESSION['codigo']; ?>,
                success: function (response) {
                    $(element).html('<img src="img/heart-fill.svg"  id=curtida>' + response);
                }
            });
        });
    });
</script>



</body>
</html>  