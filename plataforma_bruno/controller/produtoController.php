<?php

require_once "models/conexao.php";
require_once "models/produtoDAO.php";
require_once "models/produto.php";

class produtoController {

    public function buscar_todos() {
        // Alteramos o método para buscar apenas os produtos com status 'ativo'
        $produtoDAO = new produtoDAO();
        $retorno = $produtoDAO->buscar_produtos_ativos();  // Alteração aqui: agora chama o método para buscar apenas ativos
        require_once "views/loja.php";
    }

    public function mostrar_detalhes_produto() {
        if(isset($_GET["id"])) {
            $produto = new produto($_GET["id"]);
            $produtoDAO = new produtoDAO();
            $retorno = $produtoDAO->buscar_um_produto($produto);
            require_once "views/detalheProduto.php";
        }
    }
    public function excluir() {
        if (isset($_GET['idproduto'])) {
            $produto = new produto($_GET['idproduto']);
            $produtoDAO = new produtoDAO();

            // Chama o método excluir no DAO para excluir o produto
            $produtoDAO->excluir_produto($produto);

            // Redireciona de volta para a página de administração
            header("Location: index.php?controle=produtoController&metodo=buscar_todos");
        }
    }

    public function adicionar_carrinho() {   
        if($_SESSION["idusuario"] == 0) {
            header("location: index.php?controle=usuarioController&metodo=exibir_login");
        } else {
            if(isset($_GET["idproduto"])) {
                $linha = -1;
                $achou = false;
                if(isset($_SESSION["carrinho"])) {
                    foreach($_SESSION["carrinho"] as $linha => $dado) {
                        if($_GET["idproduto"] == $dado["idproduto"]){
                            $achou = true;
                        }
                    }
                }

                if(!$achou) {
                    $produto = new produto($_GET["idproduto"]);
                    $produtoDAO = new produtoDAO();
                    $retorno = $produtoDAO->buscar_um_produto($produto);

                    $_SESSION["carrinho"][$linha + 1 ]["idproduto"] = $retorno[0]->idproduto;
                    $_SESSION["carrinho"][$linha + 1 ]["nome"] = $retorno[0]->nome;
                    $_SESSION["carrinho"][$linha + 1 ]["preco"] = $retorno[0]->preco;
                    $_SESSION["carrinho"][$linha + 1 ]["quantidade"] = 1;
                    $_SESSION["carrinho"][$linha + 1 ]["imagem"] = $retorno[0]->imagem;
                    $_SESSION["carrinho"][$linha + 1 ]["descricao"] = $retorno[0]->descricao;
                }
                header("location: index.php?controle=carrinhoController&metodo=exibir");
            }
        }
    }
}
