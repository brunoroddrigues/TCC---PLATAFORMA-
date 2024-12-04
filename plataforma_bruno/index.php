<?php
    require_once "session.php"; // carrega  o arquivo que inicia a sessao
    //print_r($_SESSION);

    // Verificando se há parâmetros 
    //usa os parametro para determinar qual controlador e metodo devem ser executados
    if($_GET)
    {
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
 
        require_once "controller/". $controle . ".php";
        $objeto = new $controle();
        $objeto->$metodo();
    }
    // se não tiver paramentros vai direciona a minha pag principal 
    else
    {
        require_once "controller/inicioController.php";
        $inicio = new inicioController();
        $inicio->index();
    }
?>