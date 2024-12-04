<?php
    require_once "cabecalho1.php";
?>
    <style>
       
        h1 {
            margin: 0;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 150px); /* Ajuste conforme necessário para não sobrepor o footer */
        }
        section {
    background: linear-gradient(to bottom, white,red);
    color: white; /* Definindo a cor do texto como branco para contrastar */
    padding: 18px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
      
      </style>
</head>
<body>
    <header>
        <h1>Login</h1>
        <nav>
            <ul>
                <?php
                    require_once "menu.php";
                ?>
            </ul>
        </nav>
    </header>
    <main>
    <section>
            <h3 class="tauri-regular">Fazer Login</h3>
            <form action="#" method="post">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value = "<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>"><br><br>
                <div><?php 
                     echo $msg_erro[0] ?? "";  // mensagem é pra email
                     ?>
                </div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha"><br><br>
                <?php 
                     echo $msg_erro[1] ?? ""; // mensagem é pra senha
                     ?>
                <div class="button-container">
                    <button type="submit">Entrar</button>
                    <a class = "btn" href = "index.php?controle=usuarioController&metodo=exibir">Criar conta</a> <!-- quando clicar em criar conta vai pro cadastro -->
                </div>
            </form>
            
        </section>
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
