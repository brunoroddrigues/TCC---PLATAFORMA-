<?php

class Produto {
    private $idproduto;
    private $nome;
    private $descricao;
    private $preco;
    private $imagem;
    private $status;
    private $caracteristica;  // Adiciona a propriedade 'caracteristica'

    public function __construct($idproduto = null, $nome = null, $descricao = null, $preco = null, $imagem = null, $status = null, $caracteristica = null) {
        $this->idproduto = $idproduto;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
        $this->status = $status;
        $this->caracteristica = $caracteristica;
    }

    // Métodos Getters
    public function getIdproduto() { return $this->idproduto; }
    public function getNome() { return $this->nome; }
    public function getDescricao() { return $this->descricao; }
    public function getPreco() { return $this->preco; }
    public function getImagem() { return $this->imagem; }
    public function getStatus() { return $this->status; }
    public function getCaracteristica() { return $this->caracteristica; } 

    // Métodos Setters
    public function setIdproduto($idproduto) { $this->idproduto = $idproduto; }
    public function setNome($nome) { $this->nome = $nome; }
    public function setDescricao($descricao) { $this->descricao = $descricao; }
    public function setPreco($preco) { $this->preco = $preco; }
    public function setImagem($imagem) { $this->imagem = $imagem; }
    public function setStatus($status) { $this->status = $status; }
    public function setCaracteristica($caracteristica) { $this->caracteristica = $caracteristica; } 
}
