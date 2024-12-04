<?php

require_once "models/conexao.php";

// tem ligação com carrinho.php no views


// verificando se a sessao idusuario é = 0 se sim 
//significa que o usuario nao esta logado, com isso
// redireciona o usuario para exibir o login 
// so vai acessar o carrinho se estiver feito o login 
class carrinhoController
{
    public function exibir()
    {
        if($_SESSION["idusuario"] == 0) {
            header("location: index.php?controle=usuarioController&metodo=exibir_login");
        }
        // se for diferente de 0 significa que esta logado, indo pra pag
        // do carrinho
        else 
        {
            require_once "views/carrinho.php";
        }
    }



    public function excluir()
    {
        // verifica se o parametro linha esta definido na url
        if (isset($_GET['linha'])) {
            //obtendo o valor do parametro na url
            $linha = $_GET['linha'];
            if (isset($_SESSION["carrinho"][$linha])) {
                unset($_SESSION["carrinho"][$linha]);
                // Reindexando o array para evitar buracos
                $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
            }
        }
        // apos escluir volta a pag do carrinho 
        header("Location: index.php?controle=carrinhoController&metodo=exibir");
        die();
    }


    
    //QUANTIDADE
    //function pra quantidade do carrinho
    public function alterar()
    {
          //Verificar quantidade disponivel antes de adicionar
          if(isset($_GET["linha"])){
            if($_GET["qtde"] > 0){
              $_SESSION["carrinho"][$_GET["linha"]]["quantidade"] = $_GET["qtde"];
            }
         }
    }
}

?>
