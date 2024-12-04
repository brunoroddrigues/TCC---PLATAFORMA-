<?php
    class imagem_arte
    {
        public function __construct(private int $idimagem_arte = 0, private string $nome = "", private string $path = "",
                                    private $arte_marcial = null) {}


        public function getIdimagem()
        {
            return $this->idimagem;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getPath()
        {
            return $this->path;
        }
        public function getArte_marcial()
        {
            return $this->arte_marcial;
        }



        public function setIdimagem($idimagem)
		{
			$this->idcomentario = $idimagem;
		}
        public function setNome($nome)
		{
			$this->nome = $nome;
		}
        public function setPath($path)
		{
			$this->path = $path;
		}
        public function setArte_marcial($arte_marcial)
		{
			$this->arte_marcial = $arte_marcial;
		}
    }
?>