<?php
    class usuarioDAO extends conexao
    {
        public function __contruct()
        {
            parent:: __construct();
        }



        // esta no usuarioController.php
        public function buscar_email($usuario) 
        {
            $sql = "SELECT * FROM usuario where email = ?";
			
			$stm = $this->db->prepare($sql);
            $stm->bindValue(1,$usuario->getEmail());
			$stm->execute();
			$this->db = null;   //fetchall retorna varios objetos e so fetch retorno so um objeto
			return $stm->fetchAll(PDO::FETCH_OBJ);  //fetch ele traz só um objeto, como email so pertence a uma pessoa, nao tem como ter dois email
        }




        // esta em produtoController
        public function buscar_um_produto($produto)
        {
            $sql = "SELECT * FROM produto where idproduto = ?";
			
			$stm = $this->db->prepare($sql);
            $stm->bindValue(1,$produto->getIdproduto());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
        }



        //esta em usuarioController -> onde cadastra 
        public function cadastrar($usuario) 
        {
              try { 
                //vou inserir a tabela e acrescentar novos registros na tabela
                $sql = "insert into usuario (nome,email,senha,tipo) values(?,?,?,?)"; 
                // permite agruparo banco de dados pra garantir a consistencia dos dados
                $this->db->beginTransaction();
                $stm = $this->db->prepare($sql);
               
                $stm->bindValue(1,$usuario->getNome());
                $stm->bindValue(2,$usuario->getEmail());
                $stm->bindValue(3,$usuario->getSenha());
                $stm->bindValue(4,$usuario->getTipo());
                $stm->execute();

                // vai pegar o id do ultimo usuario inserido
                $id_usuario = $this->db->lastInsertId(); 
                // preparar a consulta para inserir tabela cliente
                $sql = "insert into cliente (idusuario,cpf,celular,logradouro,numero,bairro,cep,cidade,uf) values(?,?,?,?,?,?,?,?,?)";
                $stm = $this->db->prepare($sql);         //agora pra inserir o cliente, precisa pegar o id do usuario inserido para reutilizar no id do usuario do cliente 
                $stm->bindValue(1,$id_usuario);  
                $stm->bindValue(2,$usuario->getCliente()->getCpf());
                $stm->bindValue(3,$usuario->getCliente()->getCelular());
                $stm->bindValue(4,$usuario->getCliente()->getLogradouro());
                $stm->bindValue(5,$usuario->getCliente()->getNumero());
                $stm->bindValue(6,$usuario->getCliente()->getBairro());
                $stm->bindValue(7,$usuario->getCliente()->getCep());
                $stm->bindValue(8,$usuario->getCliente()->getCidade());
                $stm->bindValue(9,$usuario->getCliente()->getUf());
                
                $stm->execute();
                //garantir a integridade e a consistência dos dados
                $this->db->commit();
                $this->db = null; // encerrando a conexao com o banco de dados
                return true;
              } 
              catch(PDOException $e) {
                $pdo->rollBack();
                echo 'Erro ao inserir dados: ' . $e->getMessage();
              }
       
        }
    }
?>