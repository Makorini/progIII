<?php
class Veiculo {
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    public function exibirFicha() {
        return "Marca: " . $this->marca . "<br>" .
               "Modelo: " . $this->modelo . "<br>" .
               "Ano: " . $this->ano . "<br><br>";
    }
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }
}

$carro1 = new Veiculo("Renaut", "sandero", 2020);
$carro2 = new Veiculo("Volkswagen", "Up", 2025);
$carro3 = new Veiculo("Peugeot", "208", 2021);

echo "<h2>Carros:</h2>";
echo $carro1->exibirFicha();
echo $carro2->exibirFicha();
echo $carro3->exibirFicha();
