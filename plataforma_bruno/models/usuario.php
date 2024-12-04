<?php
    class usuario
    {
        public function __construct(private int $idusuario = 0, private string $nome = "", private string $email = "",
                                    private string $senha = "", private string $tipo = "", private $cliente = null) {}


         // metodo para gerar o hash
         public function password_hash()   
         {
            $this->senha = password_hash($this->senha, PASSWORD_DEFAULT); 
            // vai converter a senha em hash
         }
        
         public function password_verify($login_senha) 
         {
           
             $password = password_verify($this->senha, $login_senha);
             return $password;
         } 




        public function getIdusuario()
        {
            return $this->idusuario;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getSenha()
        {
            return $this->senha;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function getCliente()
        {
            return $this->cliente;
        }




        public function setIdusuario($idusuario)
		{
			$this->idusuario = $idusuario;
		}
        public function setNome($nome)
		{
			$this->nome = $nome;
		}
        public function setEmail($email)
		{
			$this->email = $email;
		}
        public function setSenha($senha)
		{
			$this->senha = $senha;
		}
        public function setTipo($tipo)
		{
			$this->tipo = $tipo;
		}
        public function setCliente($cliente)
		{
			$this->cliente = $cliente;
		}



    }
?>