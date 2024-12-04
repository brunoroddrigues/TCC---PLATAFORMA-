<?php
    require_once "cabecalho1.php";
?>
</head>
<body>

    <header> 
        <h1>Karatê - Arte Marcial Japonesa</h1>
        <nav>
            <ul>
            <?php
                require_once "menu.php";
            ?>
            </ul>
        </nav>
    </header>
    <main>
    <div class="container">
        <section class="texto-lateral">
            <h2 class="tauri-regular">O que é Karatê?</h2>
           <p>
            O Karatê, uma arte marcial de origem japonesa, transcende sua função primária como um sistema de autodefesa física. Além de fornecer técnicas eficazes de combate, o Karatê é um caminho de desenvolvimento pessoal e espiritual que busca o aprimoramento integral do praticante. Uma das características mais distintivas do Karatê é a ênfase na forma e na técnica. Os praticantes realizam movimentos fluidos e precisos, conhecidos como "katas", que são sequências predefinidas de movimentos que simulam situações de combate. Essa prática não só aprimora a habilidade do praticante no Karatê, mas também promove disciplina, concentração e autocontrole, aspectos essenciais para o desenvolvimento pessoal dentro e fora do tatame.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">História do Karatê</h2>
            <p>O Karatê tem suas raízes na ilha de Okinawa, no Japão, onde se desenvolveu a partir de técnicas de autodefesa chamadas de "te" e influências de artes marciais chinesas. Ao longo dos séculos, o Karatê evoluiu para uma forma de arte marcial altamente respeitada e praticada em todo o mundo. Sua jornada de Okinawa para o mundo foi marcada por uma fusão de estilos e influências, resultando em diversas escolas e técnicas que refletem a diversidade cultural e histórica da prática. Hoje, o Karatê é muito mais do que apenas uma habilidade de luta; é um caminho de autodescoberta, disciplina e respeito, que continua a atrair praticantes de todas as idades e origens. É uma prática que promove não apenas a excelência física, mas também o crescimento pessoal.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Benefícios do Karatê</h2>
            <p>
                O Karatê oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e flexibilidade, desenvolvimento de disciplina e autoconfiança, bem como habilidades de autodefesa. Os treinos intensivos de Karatê envolvem uma variedade de exercícios aeróbicos e anaeróbicos que fortalecem o coração, os pulmões e os músculos, proporcionando uma melhor saúde. Além disso, a prática constante promove o desenvolvimento da disciplina pessoal e da autoconfiança, à medida que os praticantes superam desafios. Esses benefícios combinados fazem do Karatê não apenas uma forma eficaz de exercício físico, mas também um meio de crescimento pessoal.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Ética e Respeito</h2>
            <p>No Karatê, a ética e o respeito são fundamentais. Os praticantes são ensinados a valorizar a cortesia, humildade, respeito pelos mestres e colegas de treino, além de seguir o código de conduta e os princípios morais do Karatê. Essa tradição de respeito mútuo e integridade não só contribui para um ambiente de treinamento positivo e seguro, mas também promove valores essenciais que podem ser aplicados na vida cotidiana. Essa ética é transmitida desde os primeiros dias de treinamento e é considerada tão importante quanto o próprio desenvolvimento das habilidades de combate. o internalizar esses valores éticos, os praticantes de Karatê não apenas aprimoram suas habilidades de luta, mas também cultivam uma atitude de respeito.</p>
        </section>
    </div>
    <div class="imagem-container">
        <img src="img/karate2.jpg" alt="karate0" width="400" height="300px">
        <img src="img/karate3.jpg" alt="karate1" width="400" height="300px">
        <img src="img/karate_2.jpg" alt="karate2" width="400" height="300px">
        <img src="img/karate4.jpg" alt="karate3" width="400" height="300px">
    </div>
    </main>
    <footer>
        <?php
        require_once "footer.php";
       ?>
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
</body>
</html>
