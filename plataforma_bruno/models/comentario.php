<?php
    class comentario 
    {
        public function __construct(private int $idcomentario = 0, private string $comentario = "", 
                                    private  $produto = null){}

        
            public function getIdcomentario()
            {
                return $this->idcomentario;
            }
            public function getComentario()
            {
                return $this->comentario;
            }
            public function getProduto()
            {
                return $this->produto;
            }




        public function setIdcomentario($idcomentario)
		{
			$this->idcomentario = $idcomentario;
		}
        public function setComentario($comentario)
		{
			$this->comentario = $comentario;
		}
        public function setProduto($produto)
		{
			$this->produto = $produto;
		}
        
    }
?>