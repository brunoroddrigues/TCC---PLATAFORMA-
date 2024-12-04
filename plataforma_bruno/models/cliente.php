<?php
    class cliente 
    {
        public function __construct(private int $idcliente = 0, private string $cpf = "", private string $celular = "",
                                    private string $logradouro = "", private string $numero = "", private string $bairro = "",
                                    private string $cep = "", private string $cidade = "", private string $uf = "", 
                                    private array $usuario = array()){}


                          
        public function getIdcliente()
        {
            return $this->idcliente;
        }          
        public function getCpf()
        {
            return $this->cpf;
        }
        public function getCelular()
        {
            return $this->celular;
        }
        public function getLogradouro()
        {
            return $this->logradouro;
        }
        public function getNumero()
        {
            return $this->numero;
        }
        public function getBairro()
        {
            return $this->bairro;
        }
        public function getCep()
        {
            return $this->cep;
        }
        public function getCidade()
        {
            return $this->cidade;
        }
        public function getUf()
        {
            return $this->uf;
        }
        public function getUsuario()
        {
            return $this->usuario;
        }






        public function setIdcliente($idcliente)
		{
			$this->idcliente = $idcliente;
		}
        public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
        public function setCelular($celular)
		{
			$this->celular = $celular;
		}
        public function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
        public function setNumero($numero)
		{
			$this->numero = $numero;
		}
        public function setBairro($bairro)
		{
			$this->bairro = $bairro;
		}
        public function setCep($cep)
		{
			$this->cep = $cep;
		}
        public function setCidade($cidade)
		{
			$this->cidade = $cidade;
		}
        public function setUf($uf)
		{
			$this->uf = $uf;
		}
        public function setUsuario($usuario)
		{
			$this->usuario[] = $usuario;
		}
    }
?>