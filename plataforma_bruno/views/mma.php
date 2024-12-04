            <?php
                require_once "cabecalho1.php";
            ?>
</head>
<body>
    <header>
        <h1>MMA - Artes Marciais Mistas</h1>
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
                <h2 class="tauri-regular">O que é o MMA?</h2>
                <p>O MMA, ou Artes Marciais Mistas, é uma modalidade de luta que combina técnicas de várias disciplinas, incluindo boxe, jiu-jitsu, muay thai, wrestling e judô. É conhecido por sua intensidade e versatilidade, permitindo aos lutadores utilizar uma variedade de estratégias durante o combate. Essa mistura de estilos torna o MMA um esporte dinâmico e imprevisível, onde os competidores devem ser proficientes em diferentes aspectos da luta, tanto em pé quanto no chão. Além disso, o MMA exige um alto nível de condicionamento físico e mental, já que os combates podem ser longos e exigentes. Com o aumento da popularidade do MMA ao redor do mundo, os lutadores buscam constantemente aprimorar suas habilidades e técnicas.</p>
            </section>
            <section class="texto-lateral">
                <h2 class="tauri-regular">História do MMA</h2>
                <p>O MMA tem suas raízes em competições de vale-tudo que surgiram no Brasil e no Japão nas décadas de 1920 e 1930. Desde então, evoluiu para se tornar um esporte global, com organizações como o UFC (Ultimate Fighting Championship) ganhando grande popularidade. Com o crescimento do interesse do público e o avanço das regulamentações esportivas, o MMA passou por uma transformação significativa, tornando-se mais seguro e mais profissional. Hoje em dia, o UFC é considerado a principal organização de MMA do mundo, promovendo eventos de alto nível que atraem milhões de espectadores em todo o globo. Essa ascensão meteórica do MMA reflete não apenas a sua emocionante natureza como esporte, mas também o seu apelo universal.</p>
            </section>
            <section class="texto-lateral">
                <h2 class="tauri-regular">Benefícios do MMA</h2>
                <p>
                    O MMA oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão física, aumento da confiança e autoestima, desenvolvimento de habilidades de autodefesa e disciplina mental. A natureza exigente dos treinos e competições no MMA promove o desenvolvimento de força, resistência, agilidade e flexibilidade, proporcionando aos praticantes um corpo mais forte. Além disso, o treinamento em MMA requer foco e determinação, o que ajuda a fortalecer a disciplina mental e a capacidade de lidar com desafios tanto dentro como fora do tatame. Aprender técnicas de autodefesa também proporcion uma sensação de segurança pessoal e confiança em situações adversas.</p>
            </section>
            <section class="texto-lateral">
                <h2 class="tauri-regular">Ética e Respeito</h2>
                <p>
                    No MMA, a ética e o respeito são fundamentais. Os lutadores são ensinados a respeitar seus oponentes, árbitros e as regras do esporte. A integridade e a fair play são valores essenciais que permeiam a cultura do MMA. O código de conduta inclui o reconhecimento do esforço e da habilidade dos oponentes, independentemente do resultado da luta, e a aceitação das vitórias e derrotas com dignidade e humildade. Além disso, a segurança dos competidores é uma prioridade, e os lutadores são instruídos a evitar condutas antidesportivas ou desleais que possam colocar em risco a saúde e o bem-estar de seus oponentes. Essa cultura de respeito e integridade contribui para a reputação do MMA como um esporte de alto nível que valoriza não apenas a competição.</p>
            </section>
        </div>
        <div class="imagem-central">
            <div class="imagem-container">
                <img src="img/mma3.png" alt="MMA3" width="400" height="300px">
                <img src="img/mma2.jpg" alt="MMA2" width="400" height="300px">
                <img src="img/mma4.jpg" alt="MMA4" width="400" height="300px">
                <img src="img/mma1.jpg" alt="MMA1" width="400" height="300px">
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
