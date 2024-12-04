<?php
    require_once "cabecalho1.php";
?>

<header>
    <h1>Administrador</h1>
    <nav>
        <ul>
            <?php require_once "menu.php"; ?>
        </ul>
    </nav>
    <br><br><br>
</header>

<div class="content">
    <!-- Formulário de cadastro de produto levemente ajustado para a direita -->
            <div class="form-cadastro-container">
                <h3 style="color: red; text-align: center; margin-left: -285px;">Cadastro de Novo Produto</h3>
                <form action="index.php?controle=administradorController&metodo=inserir_produto" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <label for="nome">Produto:</label>
                <input type="text" class="form-control" id="nome" name="nome" required style="font-size: 30px; width: 70%; padding: 20px;">
            </div>


            <div class="form-group">
                <label for="descricao" style="margin-top: 10px;">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" required style="width: 65%; padding: 30px; font-size: 20px;"></textarea>
            </div>


            <div class="form-group">
                <label for="preco" style="margin-top: 10px;">Preço:</label>
                <input type="text" class="form-control" id="preco" name="preco" required style="font-size: 30px; width: 45%; padding: 3px;">
            </div>

            <div class="form-group">
                <label for="caracteristica" style="margin-top: 10px;">Características:</label>
            <textarea class="form-control" id="caracteristica" name="caracteristica" style="width: 65%; padding: 30px; font-size: 20px;"></textarea>
            </div>


            <div class="form-group">
                <label for="imagem">Imagem do produto:</label>
                <input type="file" class="form-control" id="imagem" name="imagem" required 
           style="padding: 8px 20px; font-size: 16px; border: 1px;">
            </div>
            <button type="submit" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px; border: none; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease; background-color: #007bff; color: white;" onmouseover="this.style.backgroundColor='#0056b3'; this.style.transform='scale(1.05)';" onmouseout="this.style.backgroundColor='#007bff'; this.style.transform='scale(1)';">Cadastrar Produto</button>

        </form>

        <br>
    </div>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (is_array($retorno)) {
                    foreach ($retorno as $dado) {
                        echo "<tr>
                                <td style='text-align: center;'><img style='width: 150px; display: block; margin: 0 auto;' src='img/{$dado->imagem}'></td>
                                <td style='text-align: center;'>{$dado->nome}</td>
                                <td style='text-align: center;'>{$dado->preco}</td>
                                <td style='text-align: center;'>{$dado->status}</td>
                                <td style='text-align: center;'> ";
                                if ($dado->status == 'ativo') {
                                    echo "<a href='index.php?controle=administradorController&metodo=excluir_produto&idproduto={$dado->idproduto}' class='btn btn-danger'>Inativar</a>";
                                } else {
                                    echo "<a href='index.php?controle=administradorController&metodo=ativar_produto&idproduto={$dado->idproduto}' class='btn btn-success'>Ativar</a>";
                                }
                                echo "</td>
                              </tr>";
                    }
                }
            ?>
        </tbody>
    </table>

    <br>
</div>

<style>

.form-group {
    margin-bottom: 20px; 
    display: flex;
    flex-direction: column; 
    align-items: flex-start; 
    width: 100%; /* Garante que a largura do .form-group ocupe 100% do espaço disponível */
}
   .form-cadastro-container {
    max-width: 780px; /* A largura do formulário */
    margin: 0 auto;
    padding: 40px; /* Padding maior para dar mais espaço */
    margin-left: 30%; /* Alinha o formulário centralizado */
}

h3 {
    color: red;
    text-align: center;
    font-size: 40px;
    margin-bottom: 10px; /* Maior espaço entre o título e o formulário */
}

.form-cadastro .form-group {
    margin-bottom: 20px; /* Espaçamento entre os campos */
    display: flex; 
    flex-direction: column; /* Alinha os campos na vertical */
    align-items: flex-start; 
}

.form-cadastro label {
    font-size: 16px;
    color: #333; /* Cor do texto dos labels */
    margin-bottom: 8px; /* Menor espaço abaixo do label */
    width: 100%;
}

.form-cadastro input[type="text"],
.form-cadastro input[type="file"], 
.form-cadastro textarea {
    width: 100%; /* Garantir que os campos ocupem toda a largura disponível */
    padding: 12px;
    font-size: 16px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #f9f9f9;
    box-sizing: border-box;
}

.form-cadastro input[type="text"]:focus, 
.form-cadastro input[type="file"]:focus, 
.form-cadastro textarea:focus {
    border-color: #007bff;
    outline: none;
}

.form-cadastro button {
    padding: 14px 24px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 20px;
    width: 100%; /* O botão ocupa toda a largura */
}

.form-cadastro button:hover {
    background-color: #0056b3;
}

.form-cadastro button:disabled {
    background-color: #ddd;
    cursor: not-allowed;
}

.form-cadastro input[type="file"] {
    font-size: 14px;
    padding: 10px;
}

.form-cadastro input[type="file"]:hover {
    background-color: #f0f0f0;
    cursor: pointer;
    border-color: #007bff;
}

.form-cadastro input[type="file"]::-webkit-file-upload-button {
    font-size: 14px;
    background-color: #007bff;
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.form-cadastro input[type="file"]::-webkit-file-upload-button:hover {
    background-color: #e74c3c; /* Cor de fundo vermelha no hover */
}

.form-cadastro input[type="file"]::-webkit-file-upload-button:active {
    background-color: #c0392b; /* Cor de fundo vermelha mais escura quando pressionado */
    transform: scale(0.98); /* Efeito de "pressionamento" */
}


.table {
    margin-top: 40px;
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 15px;
    text-align: center;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f8f8f8;
    color: #333;
}

.btn-danger, .btn-success {
    padding: 8px 16px;
    font-size: 14px;
    border-radius: 6px;
    text-decoration: none;
    cursor: pointer;
}

.btn-danger {
    background-color: #e74c3c;
    color: #fff;
}

.btn-danger:hover {
    background-color: #c0392b;
}

.btn-success {
    background-color: #2ecc71;
    color: #fff;
}

.btn-success:hover {
    background-color: #27ae60;
}

</style>
