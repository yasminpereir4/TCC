<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <link href="http://fonts.cdnfonts.com/css/caver-pitalsal" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/feed.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>
        function pesquisar(texto){
            var texto = $('#txtPesquisar').val();
            if(texto.length>=3){
                $.ajax({
                
                url: "pesquisar.act.php?texto="+texto,
               
                success: function (response) {
                    $('#result').show();
                    $('#result').html(response);
                }
            });
            }else{
                $('#result').hide();
            }
        }
    </script>
</head>


<body>


  
 
            <?php
                @session_start();
                if(isset($_SESSION['msg'])){
                    echo "<p class=alert>$_SESSION[msg]</p>";
                    unset($_SESSION['msg']);
                }
            ?>

            <div class="tudo">
    <div class= "h1Pesq">
   
    <input type="search" name="" id="txtPesquisar" onkeyup="pesquisar()" placeholder="O que você procura?"> 
   
            <div id="result"></div>
        </div>
        </div>
     
    </body>
</html>