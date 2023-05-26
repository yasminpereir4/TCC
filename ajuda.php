<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/ajuda.css">
    <title>Formulário</title>
</head>
<body>

  
<div class="scroll-up-btn">
            <a href="feed.php">
            <svg xmlns="http://www.w3.org/2000/svg"  name="home-outline" width="38" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            </a>
        </div>

  

    <section>
        <h2>Contato</h2>
            <form action="https://formsubmit.co/sysoutweb@outlook.com" method="POST">
            <label class="email">Email: sysoutweb@outlook.com</label>
           
            <br>
            <label>Seu email:</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
            
            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
          
            <!--<a href="ajuda2.php"> Enviar </a> -->
            <button class="button" type="submit">Enviar</button>  

            <!-- <input type="hidden" name="accessKey" value="ecc8e681-0ca1-4b5e-a3f1-a6fd6bbcf84b">
            <input type="hidden" name="redirectTo" value="http://localhost/tcc2/ajuda2.html"> -->

           
        </form>
    </section>

    <?php 
    // include('footer.php'); 
    //         @session_start();
?>

</body>
</html>