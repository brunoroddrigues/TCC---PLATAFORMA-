<?php   
    class arte_marcial
    {
        public function __construct(private int $idarte_marcial = 0, private string $nome = "",
                                    private string $descricao = "", private string $historia = "",
                                    private string $beneficio = "", private string $respeito = "",
                                    private array $produto = array()) {}

        public function getIdarte_marcial()
        {
            return $this->idarte_marcial;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getDescricao()
        {
            return $this->descricao;
        }
        public function getHistoria()
        {
            return $this->historia;
        }
        public function getBeneficio()
        {
            return $this->beneficio;
        }
        public function getRespeito()
        {
            return $this->respeito;
        }
        public function getProduto()
        {
            return $this->produto;
        }
        





        public function setIdarte_marcial($idarte_marcial)
        {
            $this->idarte_marcial = $idarte_marcial;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }
        public function setHistoria($historia)
        {
            $this->historia = $historia;
        }
        public function setBeneficio($beneficio)
        {
            $this->beneficio = $beneficio;
        }
        public function setRespeito($respeito)
        {
            $this->respeito = $respeito;
        }
        public function setProduto($produto)
        {
            $this->produto[] = $produto;
        }
    }
?>