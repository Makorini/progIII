
<?php

// Definição da TraitA com o método bianca
trait TraitA {
    function bianca() {
        echo "Bianca\n";
    }
}

// Definição da TraitB com o método maccarini
trait TraitB {
    function maccarini() {
        echo "Maccarini\n";
    }
}

// Classe que utiliza ambas as traits
class ClasseC {
    use TraitA;
    use TraitB;
}

// Instância da classe
$classeC = new ClasseC();

// Chamada dos métodos das traits
$classeC->bianca();    // Exibe: Bianca
$classeC->maccarini(); // Exibe: Maccarini
