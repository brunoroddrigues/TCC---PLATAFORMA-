<?php
class vendaDAO extends conexao
{
    public function __contruct()
    {
        parent:: __construct();
    }



      //esta em usuarioController -> onde cadastra 
      public function inserir($venda) 
      {
            try { 
              //vou inserir a tabela e acrescentar novos registros na tabela
              $sql = "insert into  venda (idusuario,idforma_pagamento,data_venda) values(?,?,?)"; 
              // permite agruparo banco de dados pra garantir a consistencia dos dados
              $this->db->beginTransaction();
              $stm = $this->db->prepare($sql);
             
              $stm->bindValue(1,$venda->getUsuario()->getIdusuario());
              $stm->bindValue(2,$venda->getForma_pagamento()->getIdforma_pagamento());
              $stm->bindValue(3,$venda->getData_venda());
              $stm->execute();

              // vai pegar o id do ultimo usuario inserido
              $id_venda = $this->db->lastInsertId(); 
              $sql = "insert into itens (idproduto,idvenda,quantidade,preco_unitario,tamanho) values(?,?,?,?,?)";
              foreach ($venda->getItens() as $value) {
                # code...
           
              $stm = $this->db->prepare($sql);         //agora pra inserir o cliente, precisa pegar o id do usuario inserido para reutilizar no id do usuario do cliente 
              $stm->bindValue(1,$value->getProduto()->getIdproduto());  
              $stm->bindValue(2,$id_venda);
              $stm->bindValue(3,$value->getQuantidade());
              $stm->bindValue(4,$value->getPreco_unitario());
              $stm->bindValue(5,1); // preciso acertar
              
              $stm->execute();
            }
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