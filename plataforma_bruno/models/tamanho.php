<?php
    class tamanho 
    {
        public function __construct(private int $tamanho = 0, private string $descritivo = "",
                                    private  $produto = null){}


    public function getIdtamanho()
    {
        return $this->idtamanho;
    }
    public function getDescritivo()
    {
        return $this->descritivo;
    }
    public function getProduto()
    {
        return $this->produto;
    }




    public function setIdtamanho($idtamanho)
    {
        $this->idtamanho = $idtamanho;
    }
    public function setDescritivo($descritivo)
    {
        $this->descritivo = $descritivo;
    }
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    }
?>


