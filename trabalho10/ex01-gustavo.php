<?php
class Invoice {

    private $codigo;
    private $descricao;
    private $quantidade;
    private $preco;

    public function Invoice($codigo, $preco, $quantidade, $descricao = "NO DESCRIPTION") {
        $this->setCodigo($codigo);
        $this->setDescricao($descricao);
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
    }

    public function getFaturaQuantia() { return $this->getQuantidade() * $this->getPreco(); }

    public function getCodigo() { return $this->codigo; }

    public function setCodigo($codigo) { $this->codigo = $codigo; }

    public function getDescricao() { return $this->descricao; }

    public function setDescricao($descricao) { $this->descricao = $descricao; }

    public function getQuantidade() { return $this->quantidade; }

    public function setQuantidade($quantidade) { $this->quantidade = $quantidade < 0 ? 0 : $quantidade; }

    public function getPreco() { return $this->preco; }

    public function setPreco($preco) { $this->preco = $preco < 0 ? 0 : $preco; }
}
