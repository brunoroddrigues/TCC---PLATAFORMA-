<?php
    require_once "cabecalho1.php";
?>
</head>
<body>
    <header>
        <h1>Kickboxing - Arte Marcial</h1>
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
                <h2 class="tauri-regular">O que é o Kickboxing?</h2>
                <p>O Kickboxing é uma arte marcial que combina técnicas de boxe com chutes, socos, joelhadas e cotoveladas permitidos. É uma modalidade de luta de contato total, onde os praticantes podem utilizar todas as partes do corpo para atacar o oponente. Essa combinação de golpes torna o Kickboxing uma forma versátil e dinâmica de luta, proporcionando aos praticantes uma ampla gama de habilidades para lidar com diferentes situações de combate. Ao incorporar golpes de punho e chutes, o Kickboxing promove um treinamento completo do corpo, ajudando os praticantes a desenvolver força, agilidade, coordenação e resistência física.</p>
            </section>
            <section class="texto-lateral">
                <h2 class="tauri-regular">História do Kickboxing</h2>
                <p>O Kickboxing tem suas origens no Japão e nos Estados Unidos, onde surgiu como uma forma de combate que combinava o boxe ocidental com técnicas de chutes de várias artes marciais orientais. No Japão, foi influenciado pelo Karatê e outras artes marciais tradicionais, enquanto nos Estados Unidos, foi moldado pela popularidade do boxe e do Karatê. Ao longo dos anos, o Kickboxing ganhou destaque como uma modalidade de luta emocionante e eficaz, tornando-se um esporte popular em todo o mundo devido à sua combinação única de técnicas de soco e chute, Além disso, o Kickboxing é reconhecido por sua intensidade e versatilidade.</p>
            </section>
            <section class="texto-lateral">
                <h2 class="tauri-regular">Benefícios do Kickboxing</h2>
                <p>O Kickboxing oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e flexibilidade, desenvolvimento de habilidades de autodefesa e alívio do estresse.  Além dos benefícios físicos mencionados, o Kickboxing também pode ajudar na perda de peso e na tonificação muscular, pois é uma atividade que queima calorias e envolve o trabalho de diversos grupos musculares. Além disso, a prática regular do Kickboxing pode melhorar a postura corporal e a coordenação motora, promovendo uma maior consciência corporal.</p>
            </section>
            <section class="texto-lateral">
                <h2 class="tauri-regular">Ética e Respeito</h2>
            <p>No Kickboxing, a ética e o respeito são fundamentais. Os praticantes são ensinados a respeitar seus oponentes, treinadores e as regras do esporte. A integridade e a conduta ética são valorizadas durante todos os aspectos do treinamento e competição. 
                Além disso, a atmosfera de respeito mútuo no Kickboxing promove um ambiente positivo de camaradagem entre os praticantes, incentivando o apoio e o crescimento conjunto. Os treinadores desempenham um papel essencial na transmissão desses valores, orientando os alunos não apenas nas técnicas de luta, mas também na importância de agir com ética dentro e fora do tatame.</p>
            </section>
        </div>
        <div class="imagem-central">
            <div class="imagem-container">
                <img src="img/kicyboxing1.jpg" alt="Muay Thai" width="400" height="300px">
                <img src="img/kicy.png" alt="Outra imagem" width="400" height="300px">
                <img src="img/kicyboxing3.png" alt="Outra imagem" width="400" height="300px">
                <img src="img/kicyboxing2.jpg" alt="Outra imagem" width="400" height="300px">
            </div>
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
