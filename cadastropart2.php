<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/cad2.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Cadastro</title> 
    
</head>
<body>
        <div class="scroll-up-btn">
            <a href="cadastro.php"><ion-icon name="arrow-undo-outline"></ion-icon></a>
        </div>
          
        <div class="container">
            <div class="row">
           <form action="cadastropart2.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="codigo" value="<?php echo $_GET['cod']; ?>">
            
            <h2>Para continuar o cadastro,</h2>
            <h2>escolha uma foto de perfil:</h2>

            <div class="col-md-6 side-image">
                <div id="imagePhoto">
            <img src="./img/user.png" alt="Selecione uma imagem" id="imgPhoto">
            </div>
            </div>

            <input type="file" name="foto" id="filimage" accept="image/*"></p>
            <script src="js/script.js"></script>

            <h1 id="agaum">Faça uma descrição para seu perfil:</h1>
            <textarea name="bio" id="bio" cols="15" rows="10">
            </textarea>
            <div class="signin">
            <span><input  class="btn" type="submit" value="CADASTRAR"></span>
            </div>
    
</form>
</div>       
</div>       
</body>
</html>