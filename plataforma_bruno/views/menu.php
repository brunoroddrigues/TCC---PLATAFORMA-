
            
                <li><a href="index.php?controle=muaythaiController&metodo=exibir">Muay Thai</a></li>
                <li><a href="index.php?controle=jiu_jitsuController&metodo=exibir">Jiu-Jitsu</a></li>
                <li><a href="index.php?controle=mmaController&metodo=exibir">MMA</a></li>
                <li><a href="index.php?controle=boxingController&metodo=exibir">Boxing</a></li>
                <li><a href="index.php?controle=capoeiraController&metodo=exibir">Capoeira</a></li>
                <li><a href="index.php?controle=kicyboxingController&metodo=exibir">Kickboxing</a></li>
                <li><a href="index.php?controle=karateController&metodo=exibir">Karatê</a></li>
                <li><a href="index.php?controle=kungfuController&metodo=exibir">Kung-fu</a></li>
                <li><a href="index.php?controle=produtoController&metodo=buscar_todos">Loja</a></li>
            
                <?php
                //print_r($_SESSION);
                 // Verificando se a sessao idusuario é == 0,
                 // significa que o usuario nao esta logado
                 // exibe links de login e cadastro
                    if($_SESSION["idusuario"] == 0)    
                    {                                 
                        echo "<li><a href='index.php?controle=usuarioController&metodo=exibir_login'>Login</a></li>";
                    }
                    if($_SESSION["idusuario"] == 0)
                    {
                        echo "<li><a href='index.php?controle=usuarioController&metodo=exibir'>Cadastro</a></li>";
                    }



                    //estou verificando se esta logado
                    // diferente de 0 significa que ja esta cadastrado
                    if($_SESSION["idusuario"] != 0)
                    {
                        echo "<li><a href='index.php?controle=usuarioController&metodo=sair'>Sair</a></li>";
                    }
                    //se estiver logado vai aparecer o botao sair..
                    if($_SESSION["tipo"] == "administrador") // administrador 
                    {
                        echo "<li><a href='index.php?controle=administradorController&metodo=exibir'>Administrador</a></li>";
                    } 
                       
                ?>
               
                

