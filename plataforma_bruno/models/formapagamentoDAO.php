<?php
    class formapagamentoDAO extends conexao
    {
        public function __contruct()
        {
            parent:: __construct();
        }



        //busco produtos ativos
        // se estiver ativo no banco ira aparecer na loja

        //ESTA EM PRODUTOCONTROLLER
        public function buscar_formapagamento()
        {
            $sql = "SELECT * FROM forma_pagamento";
			
			$stm = $this->db->prepare($sql);
			$stm->execute();
            //fechando a conexao com o banco
			$this->db = null;
            // retorno os resultados, no caso são mais de um
			return $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>