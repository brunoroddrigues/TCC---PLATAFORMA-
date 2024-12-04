<?php
    require_once "cabecalho1.php";
?>
</head>
<body>
    <header>
        <h1>Jiu-Jitsu - Arte Marcial Brasileira</h1>
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
            <h2 class="tauri-regular">O que é o Jiu-Jitsu?</h2>
                <p> O Jiu-Jitsu, originário do Japão e desenvolvido no Brasil, é uma arte marcial conhecida por suas técnicas de luta no solo e submissões. É baseado no conceito de usar a técnica e a habilidade para superar a força física do oponente. Essa filosofia, que enfatiza a eficiência e a precisão dos movimentos, tornou o Jiu-Jitsu uma prática popular não apenas entre atletas, mas também entre aqueles que buscam autodefesa e condicionamento físico. Além disso, o Jiu-Jitsu é uma atividade que promove valores como disciplina, respeito e autocontrole, contribuindo para o desenvolvimento pessoal de seus praticantes. Com uma história rica e uma comunidade global apaixonada.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">História do Jiu-Jitsu</h2>
            <p>O Jiu-Jitsu tem suas raízes nas artes marciais japonesas, mas foi no Brasil que se desenvolveu como uma forma única de luta. Foi popularizado por mestres como Mitsuyo Maeda e Helio Gracie, e agora é praticado em todo o mundo. Sua popularidade crescente pode ser atribuída não apenas à sua eficácia como arte marcial, mas também à sua abordagem inclusiva, que permite que praticantes de diferentes idades, tamanhos e habilidades participem e se beneficiem da prática. Como resultado, Jiu-Jitsu podem ser encontradas em quase todos os países, reunindo uma comunidade diversificada de entusiastas dedicados à arte e à disciplina do Jiu-Jitsu, tornando-se um ambiente propício para o crescimento pessoal.</p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Benefícios do Jiu-Jitsu</h2>
            <p>
                O Jiu-Jitsu oferece uma ampla gama de benefícios físicos e mentais, incluindo aumento da força e flexibilidade, melhoria da coordenação e condicionamento físico, desenvolvimento da disciplina e resiliência mental, bem como aumento da confiança e autoestima. Além disso, a prática regular do Jiu-Jitsu pode ajudar na gestão do estresse e na promoção do bem-estar emocional, fornecendo uma válvula de escape saudável para as tensões do dia a dia. Através dos desafios enfrentados nos treinos e das lições aprendidas em cada luta, os praticantes de Jiu-Jitsu cultivam habilidades essenciais para lidar com os obstáculos da vida e alcançar seus objetivos, dentro e fora do tatame. </p>
        </section>
        <section class="texto-lateral">
            <h2 class="tauri-regular">Ética e Respeito</h2>
            <p>No Jiu-Jitsu, a ética e o respeito são valores essenciais. Os praticantes são ensinados a valorizar a humildade, a cortesia e o respeito pelos colegas de treino e adversários. O código de conduta inclui o respeito às regras do esporte e o tratamento adequado dos parceiros de treino. Esse ambiente de respeito mútuo e camaradagem não apenas promove um treinamento mais seguro e eficaz, mas também contribui para a construção de relações positivas dentro da comunidade do Jiu-Jitsu. Quando os praticantes se tratam com respeito e integridade, criam-se laços de confiança e apoio que fortalecem não apenas suas habilidades de luta, mas também sua jornada pessoal de crescimento.</p>
        </section>
        </div>
        <div class="imagem-central">
            <div class="imagem-container">
                <img src="img/jiu2.webp" alt="Jiu0" width="400" height="300px">
                <img src="img/jiu3.jpg" alt="Jiu1" width="350" height="300px">
                <img src="img/jiu4.jpg" alt="jiu2" width="400" height="300px">
                <img src="img/jiu5.jpg" alt="jiu3" width="400" height="300px">
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
