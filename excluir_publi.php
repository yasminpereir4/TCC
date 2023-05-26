<?php
    $id_publi = $_GET['id'];
    $codigo = $_GET['cod'];
    require('connect.php');

    $busca =mysqli_query($con,"SELECT * FROM `tabpubli` WHERE `id_publi`='$id_publi'");
    $post =mysqli_fetch_array($busca);
    unset($post['fotopubli']);
    if($post['codigo_usuario'] == $codigo){
    if(mysqli_query($con,"Delete from `tabpubli` WHERE `id_publi` = '$id_publi'")){
    echo '<script>alert("Registro deletado para sempre sem volta!")</script>';
    }else{
        echo '<script>alert("erro")</script>';
    }}
    @session_start();
    $_SESSION['msg'] = $msg;
    header("location:feed.php");
?>