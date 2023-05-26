<?php

require('connect.php');
session_start();
if (isset($_POST['id_publi']) && isset($_SESSION['codigo'])) {
    $id_publi = $_POST['id_publi'];
    $codigo_usuario = $_SESSION['codigo'];
    $mensagem = "Você já salvou essa publicação!";
    echo "<script>alert('$mensagem'); window.location.href = 'feed.php';</script>";

    // Verificar se o usuário já salvou essa publicação
    $query = "SELECT * FROM publicacoes_salvas WHERE id_publi = $id_publi AND codigo_usuario = $codigo_usuario";
    $resultado = mysqli_query($con, $query);
    $row_count = mysqli_num_rows($resultado);
    if ($row_count < 1) {
        // Salvar a publicação na tabela
        $query = "INSERT INTO publicacoes_salvas (id_publi, codigo_usuario) VALUES ($id_publi, $codigo_usuario)";
        mysqli_query($con, $query);
        echo '';
        header('location:feed.php');
    } else {
        $mensagem = "Você já salvou essa publicação!";
       echo "<script>alert('$mensagem');</script>";

    }
} else {
    echo 'Não foi possível salvar a publicação.';
}

?>