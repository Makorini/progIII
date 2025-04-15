<?php

// Definindo a interface PagamentoInterface com o método processarPagamento
interface PagamentoInterface {
    public function processarPagamento($valor);
}

// Classe abstrata Pagamento implementa a interface PagamentoInterface
abstract class Pagamento implements PagamentoInterface {
    // O método processarPagamento será implementado pelas classes filhas
}

// Classe PagamentoCartao que herda de Pagamento e implementa o método processarPagamento
class PagamentoCartao extends Pagamento {
    public function processarPagamento($valor) {
        return "Pagamento de R$ {$valor} via Cartão de Crédito processado com sucesso.<br>";
    }
}

// Testando a classe PagamentoCartao
$pagamento = new PagamentoCartao();
echo $pagamento->processarPagamento(125.00);

?>
