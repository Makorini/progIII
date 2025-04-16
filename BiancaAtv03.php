<?php
class Livro {
    public $titulo;          
    protected $autor;        
    private $preco;         

    public function __construct($titulo, $autor, $preco) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
    }
    public function getAutor() {
        return $this->autor;
    }

    public function setPreco($novoPreco) {
        if ($novoPreco > 0) {
            $this->preco = $novoPreco;
        } else {
            echo "Preço inválido!";
        }
    }
    public function getPreco() {
        return $this->preco;
    }
}
$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 59.90);

echo "Título: " . $livro->titulo . "\n";

echo "Autor: " . $livro->getAutor() . "\n";

echo "Preço: R$" . $livro->getPreco() . "\n";
$livro->setPreco(65.00);
echo "Novo Preço: R$" . $livro->getPreco() . "\n";
