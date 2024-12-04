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
            height: calc(100vh - 150px);
        }
        section {
            background: linear-gradient(to bottom, white, red);
            color: white;
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
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 20px;
        }
        .descricao {
            width: 400px;
            max-height: 100px;
            overflow-y: auto;
        }
        /* Estilização do botão Excluir */
        a.btn-excluir {
            background-color: #007bff; /* Azul */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        a.btn-excluir:hover {
            background-color: #66b3ff; /* Azul claro */
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Carrinho</h1>
        <nav>
            <ul>
                <?php
                    require_once "menu.php";
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $subtotal = 0;
                $total = 0;
                foreach ($_SESSION["carrinho"] as $linha => $dado) {
                    $subtotal = $dado["preco"] * $dado["quantidade"];
                    $total += $subtotal;
                    echo "<tr>
                            <td><img src='img/{$dado['imagem']}' width='100px'></td>
                            <td class='nome'>{$dado["nome"]}</td>
                            <td class='descricao'>{$dado["descricao"]}</td>
                            <td>" . number_format($dado["preco"], 2, ",", ".") . "</td>
                            <td><input type='number' min='1' value='{$dado['quantidade']}' linha='$linha' onchange='alterar(this)'></td>
                            <td><a href='index.php?controle=carrinhoController&metodo=excluir&linha=$linha' class='btn-excluir'>Excluir</a></td>
                          </tr>";
                }
                echo "<tr>
                        <td colspan='3'>Total da compra</td>
                        <td colspan='3'>" . number_format($total, 2, ",", ".") . "</td>
                      </tr>";
                echo "<tr>
                      <td><a href='index.php?controle=concluir_vendaController&metodo=finalizar_compra' class = 'btn'>Finalizar Compra</a></td>
                      <td><a href='index.php?controle=produtoController&metodo=buscar_todos' class = 'btn'>Continuar comprando</a></td>
                     </tr>"
                ?>
            </tbody>
        </table>
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

    <script>
        //script pra somar a quantidade dos preços do prosuto
        function alterar(input){
            var quantidade = input.value;
            var linha = input.getAttribute("linha");
            var url = "http://localhost/plataforma_bruno/index.php?controle=carrinhoController&metodo=alterar&linha=" + linha + "&qtde=" + quantidade;
            console.log(url);

            fetch(url).then((response) => {
                location.reload();
            });
        }
    </script>

</body>
</html>
