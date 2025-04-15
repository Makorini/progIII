<?php

class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Pedido {
    private $numero;
    private $cliente;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function adicionarCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function getDetalhesPedido() {
        $detalhes = "Pedido Nº: " . $this->numero;
        if ($this->cliente) {
            $detalhes .= " | Cliente: " . $this->cliente->getNome();
        }
        return $detalhes;
    }
}


$cliente = new Cliente("Bianca Maccarini");
$pedido = new Pedido(353652);

$pedido->adicionarCliente($cliente);

echo $pedido->getDetalhesPedido();
