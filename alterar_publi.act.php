 <?php

extract($_POST);
extract($_FILES);
require('connect.php');

$consulta = mysqli_query($con,"Select * from `tabpubli` where `id_publi` = '$id'");
$alterar = mysqli_fetch_array($consulta);

if($foto['size'] > 0){
    if($foto_anterior == "") {
      $endereco= "imgPublicacoes/".md5(time()).".jpg";
    }else{
      $endereco = $foto_anterior;
    }
    move_uploaded_file($foto['tmp_name'], $endereco);
    }else{
      $endereco = $foto_anterior;
}

if($alterar['codigo_usuario'] == $cod){
if(mysqli_query($con,"UPDATE `tabpubli` SET `descricao` = '$descricao', `fotopubli` = '$endereco'
 WHERE `tabpubli`.`id_publi` = '$id'")){
    echo '<script>alert("Alterou perfil")</script>';
    header('location:feed.php');
   
 }else{
    echo '<script>alert("Erro")</script>';
 }}else{
  header("location:feed.php");
 } 


 