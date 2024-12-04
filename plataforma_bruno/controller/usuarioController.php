<?php

require_once "models/conexao.php";
require_once "models/usuario.php";
require_once "models/usuarioDAO.php";
require_once "models/cliente.php";

    //post utilizo para enviar dados de um formulario para um servidor web
    // se o usuario preencher os campos, serao enviado para o servidor
    //empty verifico se a variavel esta vazia   

    class usuarioController
    {
          //exibir é para cadastro
        public function exibir() 
        {   
           
            $msg_erro = array("","","","","","","","","","","");
            if($_POST) //estou verificando se foi submetido a um formulario viA POST
            {
                $erro = false;
                  // Validando campo "nome_usuario"
                if(empty($_POST["nome_usuario"])) 
                {
                    $erro = true;
                    $msg_erro[0] = "Preencha o nome do usuario"; 
                    // verificando se esta vazio,
                }
                else
                {
                      // se preencher o campo, removera a mensagem de erro
                    $msg_erro[0] = ""; 
                }


                
               
                if(empty($_POST["email"])) 
                {
                    $erro = true;
                    $msg_erro[1] = "Preencha o campo E-mail"; 
                }
                else 
                // se nao for vazio entra nesse else 
                
                 //o formato nao é de e-mail
                {
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) // VALIDA SE O CAMPO É UM EMAIL
                    {  
                        $erro = true;
                        $msg_erro[1] = "E-mail não é valido";
                    } 
                    else
                    {
                         // crio um novo objeto fornecido no formularo
                        $usuario = new usuario(email:($_POST["email"]),senha: ($_POST["senha"])); // to referenciando o campo de email e senha com a variaveis de cada uma 
                        
                        $usuarioDAO = new usuarioDAO();
                         // verificar se ja existe  o email
                         $retorno = $usuarioDAO->buscar_email($usuario); 
                       

                        //verificando se a variavel retorno é um array ou se tem mais de um elemento
                         if(is_array($retorno) && count($retorno) > 0) 
                        {
                            
                              // significa que o email ja existe
                            $erro = true;
                            $msg_erro[1] = "E-mail já existe,  por favor insira outro!";  
                        }
                           // Se $retorno não é um array ou não possui elementos,
                        // o email nao existe
                        else
                        {
                            $msg_erro[1] = "";
                        }
                    }
                }

                //verificando se senha esta vazio..
                if(empty($_POST["senha"])) 
                {
                    $erro = true;
                    $msg_erro[2] = "Preencha o campo Senha"; 
                }


                if(empty($_POST["cpf"])) 
                {
                    $erro = true;
                    $msg_erro[3] = "Preencha o campo cpf"; // ta chamando da pag login.php
                }


                if(empty($_POST["celular"])) 
                {
                    $erro = true;
                    $msg_erro[4] = "Preencha o campo celular"; // ta chamando da pag login.php
                }


                if(empty($_POST["logradouro"]))
                {
                    $erro = true;
                    $msg_erro[5] = "Preencha o campo Logradouro"; // ta chamando da pag login.php
                }


                if(empty($_POST["numero"])) 
                {
                    $erro = true;
                    $msg_erro[6] = "Preencha o campo Numero"; // ta chamando da pag login.php
                }


                if(empty($_POST["bairro"])) 
                {
                    $erro = true;
                    $msg_erro[7] = "Preencha o campo bairro"; // ta chamando da pag login.php
                }


                if(empty($_POST["cep"])) 
                {
                    $erro = true;
                    $msg_erro[8] = "Preencha o campo CEP"; // ta chamando da pag login.php
                }


                if(empty($_POST["cidade"])) 
                {
                    $erro = true;
                    $msg_erro[9] = "Preencha o campo Cidade"; // ta chamando da pag login.php
                }


                if(empty($_POST["uf"])) 
                {
                    $erro = true;
                    $msg_erro[10] = "Preencha o campo UF"; // ta chamando da pag login.php
                }


                // se não tiver erro, vai indo pra frente
                if(!$erro)
                {
                     // to criando um novo objeto com os dados do formulario
                    $cliente = new cliente(cpf:($_POST["cpf"]),celular:$_POST["celular"], logradouro:$_POST["logradouro"], numero:$_POST["numero"], bairro:$_POST["bairro"],
                    cep:$_POST["cep"],  cidade:$_POST["cidade"],  uf:$_POST["uf"]); // estanciando o objeto cliente --> e cetando seus atributos --> ex éssa variael é desse atributo..
                    //print_r($cliente);
                   //criando um novo objeto com os dados do formulario e incluindo cliente
                    $usuario = new usuario(nome:$_POST["nome_usuario"],email: ($_POST["email"]), senha: ($_POST["senha"]), tipo: "usuario", cliente:$cliente); // to referenciando o campo de email e senha com a variaveis de cada uma 
                    
                    $usuario->password_hash();
                      // to instanciando o DAO para realizar o cadastro no banco de dados
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->cadastrar($usuario);

                  
                       // se o cadastro tiver correto, entra aqui
                    if($retorno)
                    {
                        header("location: index.php?controle=usuarioController&metodo=exibir_login"); // vai redirecionar pra realizar o login caso cadastro bem sucedido 
                        die();
                    }
                    //echo "<pre>";
                    //print_r($usuario);
                    //echo "</pre>";
                    //print_r($retorno);
                }
                
            }
            require_once "views/cadastro.php";
        }










        public function exibir_login() // exibir_login é do login 
        {
            $msg_erro = array("","");
            if($_POST) //estou verificando se foi submetido a um formulario 
            {
                $erro = false;
                
                if(empty($_POST["email"])) // VERIFICOU SE TA VAZIO, 
                                           
                {
                    $erro = true;
                    $msg_erro[0] = "Preencha o campo E-mail"; 
                }
                else
                {
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) // VALIDA SE O CAMPO É UM EMAIL
                    {  
                        $erro = true;
                        $msg_erro[0] = "E-mail não é valido";
                    } 
                    else
                    {
                        $retorno = null;
                        //criando um objeto.. fornecida no formulario
                        $usuario = new usuario(email:($_POST["email"]),senha: ($_POST["senha"])); 
                        $usuarioDAO = new usuarioDAO(); 
                        //verifica no banco de dados se o email ja existe 
                        $retorno = $usuarioDAO->buscar_email($usuario);


                        //verifico se retorno é array e se ta vazio, se tiver indica que nao 
                        //encontrou nada no banco de dados..
                        if(is_array($retorno) && count($retorno) <= 0)
                        {
                            $erro = true; //indicio que teve um erro 
                            $msg_erro[0] = "Email nao existe";  
                        }
                    }
                }




                if(empty($_POST["senha"]))  // VERIFICOU SE a senha TA VAZIO, SIGNIFICA QUE NAO PRERENCHEU NADA
                {
                    $erro = true;
                    $msg_erro[1] = "Preencha o campo Senha"; 
                }
                if(!$erro)
                {
                    $retorno = null; //inicializa como null
                    //objeto
                    $usuario = new usuario(email:($_POST["email"]),senha: ($_POST["senha"])); // to referenciando o campo de email e senha com a variaveis de cada uma 
                    $usuarioDAO = new usuarioDAO();
                    
                    $retorno = $usuarioDAO->buscar_email($usuario);
                    //print_r($retorno);
                    
                    if(is_array($retorno) && count($retorno) > 0)       //$retorno vai acessar a senha do banco 
                    {                         
                        //verifico se a senha e igual a do banco de dados                          
                        $verificacao = $usuario->password_verify($retorno[0]->senha); // vai verificar se a senha que esta no objéto é igual do input
                        //print_r($verificacao);
                        if($verificacao)  // se a senha estiver correta, ira prosseguir 
                        {
                            // esse trexo de codigo é quando a senha for verdadeira

                            //armazena o id do usuario na sessao 
                                $_SESSION["idusuario"] = $retorno[0]->idusuario; 
                                $_SESSION["nome"] = $retorno[0]->nome;
                                $_SESSION["email"] =  $retorno[0]->email;
                                $_SESSION["tipo"] =  $retorno[0]->tipo;
                                //estando certo, redireciona o usuario a pag principal do site
                                header("location: index.php?controle=produtoController&metodo=buscar_todos"); // ele ta redirecionando o usuario caso login este correto, pra ir pra pag loja
                        }
                        // se a verificação falhar, aparece a mensagem de erro
                        else
                        {
                            $msg_erro[1] = "Credenciais invalidas"; //se for falso fala que as credencias estao invalidas 
                        }
                    
                        //echo "<pre>";
                        //print_r($_POST);  // se tiver preenchido, cai os valores // esse print vai mostrar sempre os ultimos resultado
                        //print_r($retorno);
                        //print_r($usuario);
                        //print_r($_SESSION);
                        //echo "</pre>"; 
                    }
                }
                
            }
            require_once "views/login.php";
        }







        // vou destruir a sessao
        public function sair()
        {
            session_unset();
            session_destroy();
            header("location:index.php?controle=inicioController&metodo=index");
            die();
            // die encerra imediatamente a sessão
        }
    }
?>