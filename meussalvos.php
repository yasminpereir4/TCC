<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publis.css">
    <title>Document</title>
</head>
<body>
    



<?php
error_reporting(E_ALL);
require('connect.php');
session_start();

    
    $codUser = $_SESSION['codigo'];
    // Selecionar as publicações salvas pelo usuário
    $query = "SELECT * FROM tabpubli INNER JOIN publicacoes_salvas ON  tabpubli.id_publi = publicacoes_salvas.id_publi
    INNER JOIN tabela_cadastro ON tabpubli.codigo_usuario = tabela_cadastro.codigo
    WHERE publicacoes_salvas.codigo_usuario = '$codUser'";
    $publicacoes = mysqli_query($con, $query);

    // Loop através dos resultados
    while ($publicacao = mysqli_fetch_assoc($publicacoes)) {
        // Exibir a publicação salva
        echo "<div class=\"container-main-perfil\">";
        echo "<div class=\"separar\">";
        echo "<div class=\"perfilPublicacao\">";
        echo "<img src=$publicacao[foto] id='fotoperfil2'>";
        echo "<h2 id='nomepubli2' >$publicacao[nome]</h2>";
        echo "</div>";
        echo "</div>";
        echo  "<p id='descricao'> $publicacao[descricao]</p>";
        echo "<img src=$publicacao[fotopubli] id='fotopubli'>";
echo "</div>";
    }
    mysqli_close($con);
?>
    
</body>
</html>