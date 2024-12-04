<?php
class produtoDAO extends conexao {

    public function __construct() {
        parent::__construct();
    }

    // Função para buscar apenas os produtos com status 'ativo'
    public function buscar_produtos_ativos() {
        $sql = "SELECT * FROM produto WHERE status = 'ativo'";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $this->db = null;
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function buscar_todos_produtos() {
        $sql = "SELECT * FROM produto";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $this->db = null;
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function buscar_um_produto($produto) {
        $sql = "SELECT * FROM produto WHERE idproduto = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(1, $produto->getIdproduto());
        $stm->execute();
        $this->db = null;
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function excluir_produto($produto) {
        try {
            $sql = "UPDATE produto SET status = 'inativo' WHERE idproduto = ?";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $produto->getIdproduto());
            $stm->execute();
            $this->db = null;
        } catch (aPDOException $e) {
            echo $e->getMessage();
        }
    }
    

    public function ativar_produto($produto) {
        try {
            $sql = "UPDATE produto SET status = 'ativo' WHERE idproduto = ?";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $produto->getIdproduto());
            $stm->execute();
            $this->db = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function inserir_produto($produto) {
        try {
            $sql = "INSERT INTO produto (nome, descricao, preco, imagem, status, caracteristica) VALUES (?, ?, ?, ?, ?, ?)";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $produto->getNome());
            $stm->bindValue(2, $produto->getDescricao());
            $stm->bindValue(3, $produto->getPreco());
            $stm->bindValue(4, $produto->getImagem());
            $stm->bindValue(5, $produto->getStatus());  
            $stm->bindValue(6, $produto->getCaracteristica());
            $stm->execute();
            $this->db = null;
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
