<?php
    require_once "cabecalho1.php";
?>
</head>
<body>
    <header>
        <h1>Kung-fu</h1>
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
            <h2 class="tauri-regular">O que é o Kung-fu?</h2>
                <p>Kung Fu, também conhecido como Gong Fu, é uma arte marcial chinesa tradicional que se desenvolveu ao longo de milênios na China. A palavra "Kung Fu" não se refere apenas a um estilo específico de luta, mas é um termo amplo que abrange uma variedade de disciplinas de artes marciais chinesas. O Kung Fu é conhecido por sua variedade de técnicas, incluindo golpes de mão, chutes, bloqueios, arremessos, e técnicas de esquiva. Além do aspecto físico, o Kung Fu também envolve uma filosofia que enfatiza a disciplina, a concentração, o respeito, a humildade e a busca pela harmonia entre o corpo e a mente. Além de ser uma forma de autodefesa, o Kung Fu é apreciado por muitas pessoas ao redor do mundo como uma arte marcial que promove a saúde, a disciplina mental e a conexão espiritual.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">História do Kung-fu</h2>
            <p>A história do Kung Fu remonta a milhares de anos na China, onde suas raízes se misturam com lendas e tradições antigas. Diz-se que as origens do Kung Fu remontam à necessidade dos antigos chineses de se defenderem contra animais selvagens e tribos inimigas. Ao longo dos séculos, as técnicas de luta foram refinadas e codificadas em diversos estilos. O Kung Fu foi influenciado por diferentes fatores, incluindo a filosofia chinesa, as práticas religiosas e os métodos de treinamento militar. Templos budistas, como o famoso Mosteiro Shaolin, desempenharam um papel significativo no desenvolvimento e na preservação das artes marciais chinesas. Hoje, o Kung Fu continua sendo uma parte importante da cultura chinesa, tanto como uma forma de arte marcial quanto como uma prática que promove saúde. É praticado por milhões de pessoas em todo o mundo</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Benefícios do Kung-fu</h2>
            <p>A prática regular de Kung Fu oferece uma ampla gama de benefícios para o corpo e a mente. Além de melhorar o condicionamento físico, incluindo resistência cardiovascular, força muscular e flexibilidade, o Kung Fu promove autodefesa eficaz por meio do aprendizado de técnicas de combate. A disciplina e o foco exigidos durante o treinamento ajudam os praticantes a desenvolver autocontrole e concentração, enquanto a confiança é construída à medida que dominam novas habilidades. Além disso, o Kung Fu serve como uma válvula de escape para o estresse e a ansiedade, proporcionando alívio físico e mental. Melhoria da postura, equilíbrio e resiliência são aspectos adicionais que se desenvolvem ao longo da prática, ao mesmo tempo em que muitos encontram uma jornada espiritual através dos valores de humildade, respeito e harmonia interna que o Kung Fu promove.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Ética e Respeito</h2>
            <p>A ética e o respeito são fundamentais no Kung Fu, permeando todos os aspectos da prática dessa arte marcial. Os praticantes são ensinados a valorizar a integridade, a honestidade e a compaixão, tanto dentro quanto fora do tatame. O respeito é direcionado aos mestres, colegas de treino e adversários, refletindo-se em gestos de cortesia e cooperação durante as sessões de treinamento. Através do Kung Fu, os praticantes aprendem a controlar seus impulsos, a lidar com conflitos de forma pacífica e a cultivar uma atitude de humildade perante o aprendizado contínuo. Esses valores éticos não apenas fortalecem o caráter individual, mas também contribuem para a construção de uma comunidade unida, baseada no respeito mútuo e na busca pela excelência pessoal em harmonia com os outros.</p>
        </section>
        </div>
        <div class="imagem-central">
            <div class="imagem-container">
                <img src="img/kungfu2.jpg" alt="kungfu0" width="400" height="300px">
                <img src="img/kungfu3.jpg" alt="kungfu1" width="350" height="300px">
                <img src="img/kungfu.webp" alt="kungfu2" width="400" height="300px">
                <img src="img/kungfu1.jpg" alt="kungfu3" width="400" height="300px">
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
