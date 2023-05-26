<header>
<?php
            @session_start();
                if(isset($_SESSION['login']) && $_SESSION['login'] == true ){
                  echo "<a href=#>Olá, $_SESSION[nome]!</a>";

                  echo "<a href=logoff.php>Sair</a>";
                }
?>
   <nav>
    <li class="dropdown"><?php
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
      echo "<img src=img/camera.png class=perfil>";}

    else{
      echo "<a href=meuperfil.php><img src= $_SESSION[foto] class=perfil></a>";
     
    }  
    ?>

<form method="get">
  <section class="caixa-search">
    <input class="caixa-texto" type="text" name="" placeholder="Pesquisar...">
    <a class="botao-search" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    </a>
    </section>
    </form>

  
  <div class="container">
  <input type="checkbox" name="" id="" class="check">
  <ul class="menu-items">
    <li><a href="#" target="_blank">Salvos</a></li>
    <li><a href="#" target="_blank">Meu Perfil</a></li>
    <li><a href="#" target="_blank">Configurações</a></li>
  </ul>
  <div class="ham-menu">
    <span class="line line1"></span>
    <span class="line line2"></span>
    <span class="line line3"></span>
  </div>
</div>
   </nav>
</header>

<main> </main>