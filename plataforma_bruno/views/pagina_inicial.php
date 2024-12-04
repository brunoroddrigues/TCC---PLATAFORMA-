<?php
    require_once "cabecalho1.php";
?>
    <style>
        * {box-sizing:border-box}

  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


/* Hide the images by default */
.mySlides {
  display: none;
  width: 100%;
  height: 100%;
   
}

.mySlides img{
  /* ESSE CODIGO ESTA DANDO UM EFEITO DEGRADE NO CARROCEL*/
  box-shadow: 11px 13px 19px 4px rgba(181,16,16,1), -9px -16px 16px 4px rgba(0,0,0,1);
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: blavck; /* Mudando a cor do texto para branco para garantir visibilidade */
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-family: 'Times New Roman', Times, serif;
  background-image: linear-gradient(to bottom,black, red, black);
  border: 2px solid red; 
}



/* Number text (1/3 etc) */
.numbertext {
  color: red;
  font-size: 16px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: red;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
</head>
<body>
    </div>
    <header>
        <h1>Artes Marciais</h1>
        <nav>
            <ul>
                <?php
                    require_once "menu.php";
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 9</div>
      <a href="index.php?controle=muaythaiController&metodo=exibir"><img src="img/thai4.png" style="width:1000px" height="700px"></a>
      <div class="text">Muay Thai</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 9</div>
      <a href="index.php?controle=jiu_jitsuController&metodo=exibir"><img src="img/jiu.jpg" style="width:1000px" height="700px"></a>
      <div class="text">Jiu-Jitsu</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 9</div>
      <a href="index.php?controle=mmaController&metodo=exibir"><img src="img/mma.jpg" style="width:1000px" height="700px"></a>
      <div class="text">MMA - mixed martial arts</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 9</div>
        <a href="index.php?controle=boxingController&metodo=exibir"><img src="img/boxingg.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Boxing</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 9</div>
        <a href="index.php?controle=capoeiraController&metodo=exibir"><img src="img/capoeira.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Capoeira</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">6 / 9</div>
        <a href="index.php?controle=kicyboxingController&metodo=exibir"><img src="img/kicyboxing4.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Kickboxing</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">7 / 9</div>
        <a href="index.php?controle=karateController&metodo=exibir"><img src="img/karate.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Karate</div>
      </div>

      
      <div class="mySlides fade">
        <div class="numbertext">8 / 9</div>
        <a href="index.php?controle=kungfuController&metodo=exibir"><img src="img/kungfucapa.png" style="width:1000px" height="700px"></a>
        <div class="text">Kung-fu</div>
      </div>

        
      <div class="mySlides fade">
        <div class="numbertext">9 / 9</div>
        <a href="index.php?controle=produtoController&metodo=buscar_todos"><img src="img/loja_foto.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Loja</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      
      
  </div>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span>
  </div>
  <br>



  <!-- Campo de vídeo -->
<!--<div class="video-container">
  <iframe width="100%" height="100%" src="quebrando_regras.mp4" frameborder="0" allowfullscreen></iframe>
</div>-->


<!--<div class="video-container">
  <video id="meu-video" controls autoplay loop>
    <source src="video/quebrando_regras.mp4" type="video/mp4">
    Seu navegador não suporta o elemento de vídeo.
  </video>
  <div class="logo-overlay" onclick="togglePlayPause()" onmouseover="hoverEffect(true)" onmouseout="hoverEffect(false)">
    <img src="img/logo_play.png" alt="Logo">
  </div>
</div> -->


  
  <!--
        <section id="muaythai">
            <h2>Muay Thai</h2>
            <br>
            <img src="imagemthai1.jpeg" alt="" width="400px">
        </section>
        <section id="jiujitsu">
            <h2>Jiu-Jitsu</h2>
           <br>
           <img src="jiu.jpg" alt="" width="400px">
        </section>
        <section id="mma">
            <h2>MMA</h2>
           <br>
           <img src="mma.jpg" alt="" width="400px">
        </section>
        <section id="boxing">
            <h2>Boxing</h2>
            <br>
            <img src="boxing.jpg" alt="" width="400px">
        </section>
        <section id="capoeira">
            <h2>Capoeira</h2>
            <br>
            <img src="capoeira.jpg" alt="" width="400px">
        </section>
        <section id="kickboxing">
            <h2>Kickboxing</h2>
            <br>
            <img src="kicyboxing.jpg" alt="" width="400px">
        </section>
        <section id="karate">
            <h2>Karatê</h2>
            <br>
            <img src="karate.jpg" alt="" width="400px">
        </section> 
        -->
    </main>
    <footer>
      <p>&copy; 2024 Site de Artes Marciais - Bruno Rodrigues - GitHub: <a href="https://github.com/brunoroddrigues" style="color: blue;">brunoroddrigues</a></p>
    </footer>
     <!-- Início do Código VLibras -->
     <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <!-- Script para carregar o VLibras de forma assíncrona -->
    <script>
        (function() {
            var script = document.createElement('script');
            script.src = 'https://vlibras.gov.br/app/vlibras-plugin.js';
            script.async = true;
            script.onload = function() {
                new window.VLibras.Widget('https://vlibras.gov.br/app');
            };
            document.head.appendChild(script);
        })();
    </script>
    <!-- Fim do Código VLibras -->
    <script src="js/script.js"></script>
</body>
</html>
