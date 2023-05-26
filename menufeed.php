<body class="dark-theme">

<?php
        @session_start();
        $cod = $_SESSION['codigo'];
?>  


 
    <button id="inutil"   onclick="toggleDarkMode()">Mudar para tema escuro</button> 
    <input type="checkbox" id="menu">

    <nav> 
   <!-- <label>TeachUp</label>   -->
    <label for="menu" class="menu-bar"> 
        <i class="fa fa-bars"></i> </label>
    </nav>

    <div class="side-menu">
    <a id="logo"><h1 id="teach">Teach</h1> <h1 id="up">Up!</h1></a>
    <?php  echo "<img src=$_SESSION[foto]> <br><br>";?>
       
       <?php  echo "<h2> $_SESSION[nome] $_SESSION[sobrenome]</h2>";?>
         <br>  
         <button onclick="toggleDarkMode()">Mudar para tema escuro</button>

        <input type="checkbox" id="menu">
        
        
        <div class="opcoes">
        <a href="meuperfil.php?cod=$cod"><i class="fa fa-user"></i>
        <span>Perfil</span></a> <a href="#">     
        <i class="fa fa-envelope"></i><span>Notificações</span></a><a href="pesquisar.php">
        <i class="fa fa-shopping-basket"></i><span>Pesquisar</span></a> <a href="">
        <i class="fa fa-sellsy"></i><span>Hobbies</span></a> <a href="configuracoes.php">
        <i class="fa fa-ban"></i><span>Configurações</span></a> <a href="#">
         <a href="logoff.php"><i class="fa fa-cog"></i><span>Sair</span></a>
       
        </div>            
       
        </div>
    <div class="data"> 
          
        <div class="publicar">      
        <?php  echo "<img src=$_SESSION[foto]> <br><br>";?>
        <?php  echo "<h2> $_SESSION[nome] $_SESSION[sobrenome]</h2>";?>
        <!-- <div class="block"><input type="text" class="input-res" placeholder="Digite algo..."></div> -->
        <textarea type="text" rows="4" cols="50" placeholder= "Digite algo..." >

</textarea>
        </div>

    </div>



    <script src= "temadarkfeed.js"> </script>
</body>