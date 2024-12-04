<?php
    require_once "cabecalho1.php";
?>
     <STyle>
        /* Estilos para o formulário */
form {
    width: 40%;
    margin: 0 auto;
    padding: 20px;
}

/* Estilos para os grupos de formulário */
.form-group {
    margin-bottom: 20px;
}

/* Estilos para os rótulos dos campos */
label {
    display: block;
    margin-bottom: 5px;
}

/* Estilos para os campos de entrada */
input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Estilos para os botões */
.button-container {
    display: flex;
    justify-content: center;
}

/*button {
    width: 150px;
    padding: 15px;
    margin: 0 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: red;
    color: white;
}
*/
h2{
    font-size: 60px;
}
 </STyle>

</head>
<body>
    <div class="icone-voltar" onclick="window.location.href='index.php'">
        <img class="logotipo" src="img/icone.png" alt="Voltar para o Início" width="80px">
        <span class="icone-texto">Voltar para o Início</span>
    </div>
    <header>
        <h1>Cadastro</h1>
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
            <h2>Cadastro do Cliente</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="id_usuario">Nomes de Usuário:</label><br>
                    <input type="text" id="id_usuario" name="nome_usuario" value = "<?php echo isset($_POST['nome_usuario']) ? $_POST['nome_usuario'] : '';?>">
                </div>                                                           <!-- vai permitir que o usuario preencha e mantem preenchido apos clicar no cadastrar sem que comece de novo -->
                <div>
                    <?php 
                     echo $msg_erro[0];  // mensagem é pra nome
                     ?>
                </div>                                                       
                <div class="form-group">
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" value = "<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[1];  // mensagem é pra email
                     ?>
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label><br>
                    <input type="password" id="senha" name="senha" value = "<?php echo isset($_POST['senha']) ? $_POST['senha'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[2];  // mensagem é pra senha
                     ?>
                </div>


                <div class="form-group">
                    <label for="cpf">CPF:</label><br>
                    <input type="text" id="cpf" name="cpf" value = "<?php echo isset($_POST['cpf']) ? $_POST['cpf'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[3];  // mensagem é pra cpf
                     ?>
                </div>

                <div class="form-group">
                    <label for="celular">Celular:</label><br>
                    <input type="text" id="celular" name="celular" value = "<?php echo isset($_POST['celular']) ? $_POST['celular'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[4];  // mensagem é pra celular
                     ?>
                </div>

                <div class="form-group">
                    <label for="logradouro">Logradouro:</label><br>
                    <input type="text" id="logradouro" name="logradouro" value = "<?php echo isset($_POST['logradouro']) ? $_POST['logradouro'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[5];  // mensagem é pra logradouro
                     ?>
                </div>

                <div class="form-group">
                    <label for="numero">Número:</label><br>
                    <input type="text" id="numero" name="numero" value = "<?php echo isset($_POST['numero']) ? $_POST['numero'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[6];  // mensagem é pra numero
                     ?>
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro:</label><br>
                    <input type="text" id="bairro" name="bairro" value = "<?php echo isset($_POST['bairro']) ? $_POST['bairro'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[7];  // mensagem é pra bairro
                     ?>
                </div>

                <div class="form-group">
                    <label for="cep">CEP:</label><br>
                    <input type="text" id="cep" name="cep" value = "<?php echo isset($_POST['cep']) ? $_POST['cep'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[8];  
                     ?>
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade:</label><br>
                    <input type="text" id="cidade" name="cidade" value = "<?php echo isset($_POST['cidade']) ? $_POST['cidade'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[9];  
                     ?>
                </div>


                <div class="form-group">
                    <label for="uf">UF:</label><br>
                    <input type="text" id="uf" name="uf" value = "<?php echo isset($_POST['uf']) ? $_POST['uf'] : '';?>">
                </div>
                <div>
                    <?php 
                     echo $msg_erro[10];  
                     ?>
                </div>


                <div class="button-container">
                    <input type="submit" value = "Cadastrar" class="btn"> 
                    <input class = "btn" type="reset" value = "Limpar">  <!-- -->
                </div>


            </form>
        </section>
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
</body>
</html>
