
<?php
require('connect.php');

    $id_publi = $_GET["id"];
    $cod_usuario = $_GET['user'];

    
    $busca = mysqli_query($con, "Select * from `curtidas` where `id_publi` = '$id_publi' AND `codigo_usuario` = '$cod_usuario'");


    if($busca->num_rows > 0){
        $atual = mysqli_fetch_array($busca);
        $idCurtida = $atual['id_curtida'];
        mysqli_query($con, "Delete from `curtidas` where `id_curtida` = '$idCurtida'");
        $query = "UPDATE tabpubli SET curtidas = curtidas - 1 WHERE id_publi = $id_publi";

    }else{
        mysqli_query($con, "INSERT INTO `curtidas` (`id_curtida`, `id_publi`, `codigo_usuario`) VALUES (NULL, '$id_publi', '$cod_usuario');");
        $query = "UPDATE tabpubli SET curtidas = curtidas + 1 WHERE id_publi = $id_publi";
    }

            mysqli_query($con, $query);

    $busca = mysqli_query($con,"SELECT * from `tabpubli` where `id_publi` = '$id_publi'");
    $linha = mysqli_fetch_array($busca);

    echo $curtidas = $linha['curtidas'];


            

?>
