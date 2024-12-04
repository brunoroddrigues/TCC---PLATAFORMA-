<?php
    class forma_pagamento
    {
        public function __construct(private int $idforma_pagamento = 0, private string $descritivo = ""){}



        public function getIdforma_pagamento()
        {
            return $this->idforma_pagamento;
        }
        public function getDescritivo()
        {
            return $this->descritivo;
        }
       



        public function setIdforma_pagamento($idforma_pagamento)
        {
            $this->idforma_pagamento= $idforma_pagamento;
        }
        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }
    }
?>