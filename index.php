<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>TeachUp!</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Hind+Siliguri&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body class="tudo">
  
    <script src="js/inicio.js"></script> 
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
   <!-- NAVBAR-MENU -->
  <header>
  <nav class="nav">
        <div class="container">
            <div class="logo">
            <a class="navbar-brand" href="#" id="logo"> 
              <img src="img/logo.png" alt="" id="logoLetra">
            </a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#contact">Contato</a></li>
                    <li><a href="login.php">Entrar</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/nav.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</header>

  <main>
    
    <section class="home d-flex align-items-center h-75" id="home">
      <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-xl-4">
              <p id="textInicio" class="text-dark">
               UMA REDE DE APOIO AOS SEUS ESTUDOS.
              </p>
         <a href="cadastro.php">  <button class="btn-cad">  CADASTRAR-SE </button></a> 
             </div> 
             <div class="cool-xl-8 d-flex justify-content-end">
                <img src="img/imagemindex.png" alt="" id="imgInicio">
             </div>
             <div class="espaco">
              --------------------------------------------------------
             </div>
             <div class="espaco">
              --------------------------------------------------------
             </div>
             <div class="espaco">
              --------------------------------------------------------
             </div>
             <div class="espaco">
              --------------------------------------------------------
             </div>
          </div>
      </div>
    </section>
  
    <!--CURSOS -->
    <section class="cursos pt-5" id="cursosfundo">
       <div class="containerCursos pb-5">
          <h2 class="text-center pt-5 pb-4">VENHA FAZER PARTE</h2>
          <span class="d-flex justify-content-center mb-5 fs-5">Aqui você encontra :</span>
          <div class="row tex-center mb-4"> 
            <div class="col-xl-4 border">
              <svg xmlns="http://www.w3.org/2000/svg" id="computador" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
              </svg>  TECNOLOGIA  /  SISTEMAS
            </div>
            <div class="col-xl-4 border">
              <svg xmlns="http://www.w3.org/2000/svg" id="brush" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
              </svg>  HOBBIES / INTERESSES
            </div>
            <div class="col-xl-4 border">
              <svg xmlns="http://www.w3.org/2000/svg" id="settings"  fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
              </svg>  CONHECIMENTOS GERAIS 
            </div>
      </div>
    </section>


    <!-- SOBRE -->

    <section class="about pb-5" id='about'>
        <div class="container mt-5">
           <h2 class="text-center pb-5">Uma rede social feita para o que você ama!</h2> 
          <div class="row mb-5 pb-5" id="bordinha">
            <div class="col-xl-5 espaco-entre">
              <img src="img/computador.png" class="img-fluid" alt="TeachUp!">
            </div>
            <div class="col-xl-7 d-flex align-items-center borda">
            <p class="text-dark">
              
            No TeachUp nós valorizamos seu conhecimento! Culinária, música, esportes, arte...
            Qual seu hobbie favorito? Aqui você aprende ao mesmo tempo que ensina! Faça publicações interativas compartilhando seus conhecimentos
            sobre assuntos diversos e aprenda sobre tudo que sempre quis totalmente de graça!
            
          </div>
          </div>
          <div class="row mb-5 pb-5" id="bordinha">
            <div class="col-xl-7 d-flex align-items-center borda">
            <p class="text-dark">
            Nossa plataforma foi pensada e desenvolvida com o alvo de alcançar toda mente ansiosa por conhecimento.
            Se você se encaixa no grupo que ama aprender de tudo um pouco, o que está esperando? Venha fazer parte!
           </div> 
          <div class="col-xl-5 espaco-entre">
              <img src="img/sharing.svg" class="img-fluid" alt="Talking">
            </div>
          </div>
        </div>

    </section>

    <!-- AVALIAÇÕES -->
    <section class="projects mb-5 pb-5" id="projects">
          <div class="container-2">
          <h2 class="text-center pt-5 pb-3">AVALIAÇÕES</h2>
          <p class="d-flex mx-auto text-center w-75 b-5" id="textoAvaliar"> 
          Alguns usuários deixaram suas impressões a respeito de nós. Confira! 
          </p>
            
            <div class="row">
              <div class="col-xl-4 cards">
                <div class="card" style="width: 14rem;">
                  <img src="img/manzini.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3 class="card-title text-center my-3">Kawan Manzini</h3>
                    <h5 class="card-title text-center my-3"><i>Desenvolvedor Full-Stack</i></h5>
                    <p class="card-text text-center mb-5"> 
                      "Interface atrativa e ideia interessante, recomendável para qualquer tipo de público."
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 cards">
                <div class="card" style="width: 14rem;">
                  <img src="img/gui.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3 class="card-title text-center my-3">Guilherme Pereira</h3>
                    <h5 class="card-title text-center my-3"><i>Aluno da Etec</i></h5>
                    <p class="card-text text-center mb-5"> 
                      "Design agradável, site viável para aqueles que estão em busca de melhorias em suas habilidades."
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 cards">
                <div class="card" style="width: 14rem;">
                  <img src="img/ronaldt.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3 class="card-title text-center my-3">Ronaldt Mendes</h3>
                    <h5 class="card-title text-center my-3"><i>Arquiteto de Migração - IBM</i></h5>
                    <p class="card-text text-center mb-5">"Interessante ideia,
rapidez na navegação, site bem intuitivo, layout bem distribuido."</p>
                  </div>
                </div>
              </div>
            </div>
         
        </div>
    </section>


   
    
  <!-- FOOTER -->
    <footer class="footer" id="contact">
       <div class="container">
        <div class="row pb-5 pt-4">
            <div class="col-xl-4">
              <h4 class="text-dark text-center">Entre em contato</h4>
              <div class="phones d-flex flex-column">
                <span class="text-dark text-center" mt-4 mb-3><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> 
                  (11) 9 7865-6267</span>
                <span class="text-dark text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>
                   sysoutweb@outlook.com</span>  
                   <!-- <p class="float-right" id="opcao"><a href="#">Voltar ao topo</a> </p> -->
                  
              </div>  
            </div>
            <div class="col-xl-4 d-flex justify-content-center">
               <figure class="figure-logo">
                <img src="img/logosys.png" alt="">
                <figcaption class="text-dark text-center Ip-2 fw-semibold" id="nome"> SysOutWeb</figcaption>
               </figure>
            </div>
            <div class="col-xl-4">
              <h4 class="text-dark text-center">Escritório da empresa</h4>
               <span class="text-dark text-center">Endereço: R. Virgínia Ferni, 400 - Itaquera, São Paulo - SP, 08253-000</span>
              </div>
               <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.594691530957!2d-46.44093448438656!3d-23.547075866951392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce64280649d3ef%3A0x1a45f2117c3b99d3!2sR.%20Virg%C3%ADnia%20Ferni%2C%20400%20-%20Conj.%20Res.%20Jos%C3%A9%20Bonif%C3%A1cio%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008253-000!5e0!3m2!1spt-BR!2sbr!4v1679062049211!5m2!1spt-BR!2sbr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

            </div>
             </div> <div class="row">
              <div class="col-xl-12 d-flex pb-2"> 
               
                <span class="text-dark mx-auto" >SysOut Web | &copy; Copyright 2023</span>
              </div> <span class="text-dark text-center"><a href="#" class="text-center"> Voltar ao topo</a></span>
        </div>
       </div>

    </footer>
    
 </body>
</html>   