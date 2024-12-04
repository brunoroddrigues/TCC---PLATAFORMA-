<?php

require_once "models/conexao.php";
require_once "models/Produto.php";
require_once "models/produtoDAO.php";

class administradorController {

    // Função para exibir todos os produtos
    public function exibir() {
        if ($_SESSION["tipo"] != "administrador") {
            header("location: index.php?controle=inicioController&metodo=index");
            die();
        }

        $produtoDAO = new produtoDAO();
        $retorno = $produtoDAO->buscar_todos_produtos();
        require_once "views/administrador.php";
    }

    // Função para excluir (inativar) um produto
    public function excluir_produto() {
        if ($_GET["idproduto"]) {
            $produto = new produto(idproduto: $_GET["idproduto"]);
            $produtoDAO = new produtoDAO();
            $produtoDAO->excluir_produto($produto);
            header("location: index.php?controle=administradorController&metodo=exibir");
        }
    }

    // Função para ativar um produto
    public function ativar_produto() {
        if ($_GET["idproduto"]) {
            $produto = new produto(idproduto: $_GET["idproduto"]);
            $produtoDAO = new produtoDAO();
            $produtoDAO->ativar_produto($produto);
            header("location: index.php?controle=administradorController&metodo=exibir");
        }
    }

    // Função para inserir um novo produto
    public function inserir_produto() {
        // Verifica se o usuário é administrador
        if ($_SESSION["tipo"] != "administrador") {
            header("location: index.php?controle=inicioController&metodo=index");
            die();
        }
    
        // Verifica se o formulário foi enviado via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém os dados do formulário
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $caracteristica = $_POST['caracteristica']; 
            $status = isset($_POST['status']) ? $_POST['status'] : 'ativo';  // Garantir que status tenha um valor válido (default 'ativo')
    
            // Trata a imagem
            $imagem = $_FILES['imagem'];
            $nome_imagem = time() . "-" . $imagem['name']; // Cria um nome único para a imagem
            move_uploaded_file($imagem['tmp_name'], 'img/' . $nome_imagem); // Move a imagem para a pasta img/
    
            // Cria o objeto produto
            $produto = new produto();
            $produto->setNome($nome);
            $produto->setDescricao($descricao);
            $produto->setPreco($preco);
            $produto->setImagem($nome_imagem);
            $produto->setStatus($status); // Agora o status é corretamente atribuído
            $produto->setCaracteristica($caracteristica);
            // Chama o método do DAO para inserir o produto no banco de dados
            $produtoDAO = new produtoDAO();
            $retorno = $produtoDAO->inserir_produto($produto);
    
            if ($retorno) {
                
                $_SESSION['mensagem_sucesso'] = "<span style='color: red;'>Produto cadastrado com sucesso!</span>";

                header("location: index.php?controle=administradorController&metodo=exibir");
            } else {
                echo "Erro ao cadastrar o produto.";
            }
        }
    }
    
}
