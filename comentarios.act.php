<?php

require('connect.php'); // Arquivo de conexão com o banco de dados
extract($_POST);
extract($_FILES);
@session_start();

  // Array para armazenar os comentários
  $comentarios = array();

  // Verifica se o formulário foi submetido
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Obtém o comentário enviado pelo usuário
      $novoComentario = $_POST['comentario'];
      // Adiciona o novo comentário ao array
      $comentarios[] = $novoComentario;
  }
  
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o comentário enviado pelo usuário
    $comentario = $_POST['comentario'];

    // ID do usuário e da publicação (exemplo)

    // Insere o comentário no banco de dados
    $query = "INSERT INTO tabcoment (codcoment, codpost, codusuario, comentario) 
    VALUES (NULL, '$codpost', '{$_SESSION['codigo']}', '$comentario')";
    if (mysqli_query($con, $query)) {
        $msg = "Comentário gravado com sucesso!";
    } else {
        $msg = "Erro ao gravar o comentário: " . mysqli_error($con);
    }

    // Exibe a mensagem de sucesso ou erro

    echo $msg;
    header("location:feed.php?codigo=$codigo");
}

?>

