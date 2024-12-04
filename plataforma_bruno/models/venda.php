<?php
    class venda
    {
        public function __construct(private int $venda = 0, private string $data_venda = "", 
                                    private  $forma_pagamento = null, private array $itens = array(),
                                    private  $usuario = null){}
                                    
        

        public function getIdvenda()
        {
            return $this->idvenda;
        }
        public function getData_venda() 
        {
            return $this->data_venda;
        }
        public function getForma_pagamento()
        {
            return $this->forma_pagamento;
        }
        public function getItens()
        {
            return $this->itens;
        }
        public function getUsuario()
        {
            return $this->usuario;
        }




        public function setIdvenda($idvenda)
        {
            $this->idvenda = $idvenda;
        }
        public function setData_venda($data_venda)
        {
            $this->data_venda = $data_venda;
        }
        public function setForma_pagamento($forma_pagamento)
        {
            $this->forma_pagamento = $forma_pagamento;
        }
        public function setItens($iditens, $quantidade, $tamanho, $preco_unitario, $produto)
        {
            $this->itens[] = new itens($iditens, $quantidade, $tamanho, $preco_unitario, $produto);
        }
        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;
        }
    }
?>


