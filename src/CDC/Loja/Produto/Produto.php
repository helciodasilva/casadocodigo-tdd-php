<?php

namespace CDC\Loja\Produto;

class Produto
{        
    
    private$nome;
    private $valorUnitario;
    private $quantidade;

    public function __construct($nome, $valorUnitario, $quantidade = 1)
    {
        $this->nome = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getvalorUnitario()
    {
        return $this->valorUnitario;
    }

    function getQuantidade()
    {
        return $this->quantidade;
    }

    function getvalorTotal()
    {
        return $this->valorUnitario * $this->quantidade;
    }

}