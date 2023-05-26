<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="estilos/interesses.css">
  <title>Escolha seus interesses</title>
</head>
<body>


<div class="scroll-up-btn">
            <a href="feed.php">
            <svg xmlns="http://www.w3.org/2000/svg"  name="home-outline" width="38" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            </a>
        </div>
  
<form method="post" action="hobbies.act.php">
  <!-- <input type="hidden" name="codigo" value="<?php echo $_GET['codigo'];?>">   -->
  <div class="tudo">
    <div class="container">
  <div class="title"> <h1>Altere seus interesses:</h1></div>
  <div class="botoes">
  <label class="cont"><h3>Esporte</h3>
  <input onclick="mudarCor('#009516')" type="checkbox" name="interesses[]" value="esporte"><span class="checkmark"></span>
  </label>
  <label class="cont"><h3>Tecnologia</h3> 
  <input onclick="mudarCor('#000c95')" type="checkbox" name="interesses[]" value="tecnologia"><span class="checkmark"></span>
  </label>
  </div>
  <div class="botoes">
  <label class="cont"><h3>Arte</h3> 
  <input onclick="mudarCor('#952f00')" type="checkbox" name="interesses[]" value="arte"><span class="checkmark"></span>
  </label>
  <label onclick="mudarCor('#95008d')" class="cont"><h3>Moda</h3> 
  <input type="checkbox" name="interesses[]" value="moda"><span class="checkmark"></span>
  </label>
  <label class="cont"><h3>Culinária</h3> 
  <input onclick="mudarCor('#beb800')" type="checkbox" name="interesses[]" value="moda"><span class="checkmark"></span>
  </label>
  </div>
  <input id="btn-cad" type="submit" value="CADASTRAR">
  </div>
</form>
</div>

<script>
    
    function mudarCor(cor){
        // referencia o primeiro 'h1' do layout html
        const fundo = document.getElementsByTagName('body')[0];
        fundo.style.background = cor;  
    }

    </script>
</body>
</html>