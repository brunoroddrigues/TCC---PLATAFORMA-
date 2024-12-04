<?php
    require_once "cabecalho1.php";
?>
</head>
<body> 
    <div class="icone-voltar" onclick="window.location.href='index.php'">
        <img class="logotipo" src="img/icone.png" alt="Voltar para o Início" width="80px">
        <span class="icone-texto">Voltar para o Início</span>
    </div>
    <header>
        <h1>Boxing - Arte Marcial</h1>
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
            <h2 class="tauri-regular">O que é o Boxing?</h2>
            <p>O Boxing, ou boxe, é uma arte marcial que se concentra principalmente no uso dos punhos para o combate. É conhecido por sua combinação de técnica, velocidade, agilidade e condicionamento físico. Neste esporte, os lutadores usam luvas acolchoadas e seguem regras específicas para lançar socos precisos e defensivamente eficazes, enquanto desviam e bloqueiam os ataques do oponente. O treinamento de boxe não apenas desenvolve habilidades de combate, mas também melhora a coordenação, a concentração e a resistência cardiovascular dos praticantes. Com sua longa história e tradição, o boxe continua a ser um dos esportes de combate mais populares e respeitados em todo o mundo.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">História do Boxing</h2>
            <p>O boxe é um esporte que transcende fronteiras e culturas, com uma rica história que remonta a séculos atrás. Desde os seus primórdios até os dias atuais, o boxe tem sido uma expressão de coragem, determinação e habilidade física. Ao longo dos anos, grandes campeões surgiram, deixando um legado de glória e inspiração para futuras gerações. Hoje, o boxe é muito mais do que apenas uma competição esportiva; é uma forma de arte que exige dedicação, disciplina e paixão. Através do boxe, os praticantes encontram não apenas um meio de se expressar, mas também uma maneira de superar desafios e alcançar grandes conquistas. É essa combinação única de habilidade técnica.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Benefícios do Boxing</h2>
            <p>O Boxing oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e resistência muscular, desenvolvimento de reflexos rápidos e aumento da autoconfiança. Os treinos intensivos de boxe envolvem uma combinação de exercícios aeróbicos e anaeróbicos, ajudando a melhorar a saúde do coração e dos pulmões, além de promover a queima de calorias e a perda de peso. Além disso, o treinamento de boxe é altamente exigente fisicamente, contribuindo para o desenvolvimento da força e resistência muscular em todo o corpo. Em termos mentais, o boxe requer concentração, foco e agilidade mental.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Ética e Respeito</h2>
            <p>No Boxing, a ética e o respeito são fundamentais. Os boxeadores são ensinados a respeitar seus oponentes, treinadores, árbitros e as regras do esporte. A integridade e a conduta ética são valorizadas durante todos os aspectos do treinamento e competição. Isso significa que os lutadores devem se esforçar para alcançar a vitória de maneira justa, sem recorrer a táticas desleais ou antiéticas. Além disso, o respeito entre os boxeadores é essencial, tanto dentro quanto fora do ringue, contribuindo para um ambiente de competição saudável e de camaradagem. Os valores de ética e respeito no boxe não apenas promovem a integridade do esporte, também são aplicáveis à vida pessoal dos atlétas.
            </p>
        </section>
        </div>
        <div class="imagem-central">
            <div class="imagem-container">
                <img src="img/boxing2.webp" alt="boxing0" width="400" height="300px">
                <img src="img/boxe4.jpg" alt="boxing1" width="400" height="300px">
                <img src="img/boxing3.webp" alt="boxing2" width="400" height="300px">
                <img src="img/boxe1.jpg" alt="boxing3" width="400" height="300px">
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
