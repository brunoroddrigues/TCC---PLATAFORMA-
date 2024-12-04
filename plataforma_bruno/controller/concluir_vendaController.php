<?php

require_once "models/conexao.php";
require_once "models/itens.php";
require_once "models/formapagamentoDAO.php";
require_once "models/forma_pagamento.php";
require_once "models/venda.php";
require_once "models/vendaDAO.php";
require_once "models/usuario.php";
require_once "models/produto.php";


class concluir_vendaController
{
    public function finalizar_compra()
    {
        // Verificar se o carrinho está vazio
        if (empty($_SESSION["carrinho"])) {
            // Redirecionar de volta para o carrinho ou página de produtos
            header("Location: index.php?controle=carrinhoController&metodo=exibir");
            die();
        }

        // Verificar se há POST e se a forma de pagamento foi selecionada
        if ($_POST && isset($_POST["Forma_pagamento"]) && $_POST["Forma_pagamento"] != "0") {
            $forma_pagamento = new forma_pagamento($_POST["Forma_pagamento"]);
            $usuario = new usuario($_SESSION["idusuario"]);
            $venda = new venda(0, date("Y-m-d"), $forma_pagamento, array(), $usuario);
            foreach ($_SESSION["carrinho"] as $value) {
                $produto = new produto($value["idproduto"]);
                $venda->setItens(0, $value["quantidade"], null, $value["preco"], $produto);
            }

            $vendaDAO = new vendaDAO();
            $vendaDAO->inserir($venda);

            // Após processar a venda, exibir mensagem de sucesso
            $mensagem_sucesso = "Sua compra foi concluída com sucesso!";
        } elseif ($_POST) {
            // Se a forma de pagamento não for selecionada
            $mensagem_erro = "Por favor, escolha uma forma de pagamento para concluir a compra.";
        }

        // Buscar formas de pagamento
        $forma_pagamento = new formapagamentoDAO();
        $retorno = $forma_pagamento->buscar_formapagamento();

        require_once "views/concluirVenda.php";
        die();
    }
}
?>
