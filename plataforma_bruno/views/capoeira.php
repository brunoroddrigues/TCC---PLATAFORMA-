<?php
    require_once "cabecalho1.php";
?>
</head>
<body>
    <header>
        <h1>Capoeira - Arte Marcial Brasileira</h1>
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
            <h2 class="tauri-regular">O que é a Capoeira?</h2>
            <p>
                A Capoeira é uma arte marcial brasileira que combina elementos de luta, dança, acrobacias e música. Originada no Brasil pelos africanos escravizados, a capoeira é conhecida por seu estilo único e ritmo dinâmico. Sua prática é uma expressão cultural que integra movimentos fluidos e ágeis com músicas tradicionais tocadas em instrumentos específicos, como o berimbau. Ao longo dos anos, a capoeira se desenvolveu não apenas como uma forma de autodefesa, mas também como uma manifestação artística e cultural que promove respeito, camaradagem e superação. Através da capoeira, os praticantes não só aprimoram suas habilidades físicas, mas também se conectam com a história e a identidade cultural do Brasil.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">História da Capoeira</h2>
            <p>A Capoeira tem uma história rica e complexa, remontando aos tempos de escravidão no Brasil colonial. Era praticada inicialmente como uma forma de autodefesa e resistência, mas eventualmente se desenvolveu em uma forma de expressão cultural e esporte. Durante séculos, os praticantes de capoeira usaram sua habilidade e astúcia para preservar sua dignidade e resistir à opressão. Por meio de movimentos fluidos e acrobáticos, eles desenvolveram uma técnica única que combinava elementos de dança e luta, permitindo-lhes enfrentar seus opressores de maneira criativa e eficaz. Com o passar do tempo, a capoeira transcendeu suas origens humildes para se tornar uma parte integral da cultura brasileira. </p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Benefícios da Capoeira</h2>
            <p>
                A Capoeira oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da coordenação motora, aumento da flexibilidade, fortalecimento muscular, desenvolvimento de ritmo e musicalidade, além de promover a inclusão social e cultural. Os movimentos dinâmicos e ritmados da capoeira exigem coordenação precisa entre corpo e mente, o que ajuda a aprimorar habilidades motoras e a consciência corporal. Além disso, os treinos frequentes proporcionam um aumento significativo na flexibilidade e no fortalecimento muscular, promovendo uma melhor saúde física e prevenindo lesões. A capoeira também é uma forma de expressão artística que estimula a criatividade e o desenvolvimento musical.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Ética e Respeito</h2>
            <p>Na Capoeira, a ética e o respeito são fundamentais. Os praticantes são ensinados a respeitar seus mestres, colegas de treino, a música e as tradições da capoeira. A camaradagem, o jogo limpo e o respeito mútuo são aspectos essenciais da prática da capoeira. Esse código de conduta não apenas promove um ambiente de treino seguro e acolhedor, mas também preserva a integridade e os valores tradicionais da capoeira como uma forma de arte e expressão cultural. Ao internalizar esses princípios éticos, os praticantes não só aprimoram suas habilidades na capoeira, mas também cultivam uma atitude de respeito e humildade que se estende além do tatame, influenciando positivamente suas interações na vida cotidiana.</p>
        </section>
        </div>
        <div class="imagem-central">
            <div class="imagem-container">
                <img src="img/capoeira1.jpg" alt="capoeira1" width="400" height="300px">
                <img src="img/capoeira2.png" alt="capoera2" width="400" height="300px">
                <img src="img/capoeira3.png" alt="capoeira3" width="400" height="300px">
                <img src="img/capoeira4.png" alt="capoeira4" width="400" height="300px">
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
</body>
</html>
