<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publis.css">
</head>

<body>
<?php 

require('connect.php');
session_start();

$codigo = $_GET['user'];
$id_publi = $_GET['id'];

// Verifique se a conexão com o banco de dados foi estabelecida corretamente
if ($con === false) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}

// Consulta SQL para obter as publicações do usuário atual
$sql = "SELECT * FROM tabpubli WHERE codigo_usuario = '$codigo'";
$resultado = mysqli_query($con, $sql);

// Verifique se a consulta SQL foi bem-sucedida
if ($resultado === false) {
    die("Erro ao executar a consulta SQL: " . mysqli_error($con));
}

// Verifique se há publicações do usuário atual
if (mysqli_num_rows($resultado) === 0) {
    echo "Este usuário ainda não publicou nada.";
} 
if(mysqli_num_rows($resultado) > 0){
    // Exiba as publicações do usuário atual
    while ($publicacao = mysqli_fetch_array($resultado)) {
        echo "<div class=\"container-main-perfil\">";
        echo "<img id='fotopubli' src=$publicacao[fotopubli] >";
        echo  "<p id='descricao'> $publicacao[descricao]</p>";
        echo "</div>";
    }
}

mysqli_close($con);
?>
</body>
</html>