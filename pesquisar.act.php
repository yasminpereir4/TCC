
<?php

require('connect.php');

session_start();
if(isset($_GET['texto'])){
    $texto = $_GET['texto'];
/*
    $interesses = mysqli_query($con, "SELECT `nome_interesse` FROM `interesses` WHERE `codigo_usuario` = 48");
   \ $interesses = mysqli_fetch_row($interesses);
    $interesses = explode(';',$interesses[0]);

    var_dump($interesses);
*/

    $buscaa = "SELECT tabela_cadastro.nome, tabela_cadastro.foto, tabpubli.descricao, tabpubli.fotopubli
    FROM `tabela_cadastro` INNER JOIN tabpubli ON tabpubli.codigo_usuario = tabela_cadastro.codigo
    WHERE tabpubli.descricao LIKE '%".$texto."%'";
   $publicacoes = mysqli_query($con , $buscaa);
   
  
   
   while($publicacao = mysqli_fetch_array($publicacoes)){
    echo "<div class=\"container-main\">";
            echo "<div class=\"separar\">";
            echo "<div class=\"perfilPublicacao\">";
            echo "<img src=$publicacao[foto] id='fotoperfil'>";
            echo "<h2> $publicacao[nome] </h2>";
            echo "</div>";
            echo "</div>";
            echo "<p id='descricao'>$publicacao[descricao]</p>";
            echo "<img src=\"$publicacao[fotopubli]\" id='fotopubli'>";
            
            echo "</div>";


   }}

?>

