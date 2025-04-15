<?php
class ContaBancaria {
    private $titular;
    private $saldo;
    private $numeroConta;

    public function __construct($titular, $saldoInicial, $numeroConta) {
        $this->titular = $titular;
        $this->saldo = max(0, $saldoInicial);
        $this->numeroConta = $numeroConta;
        echo "<p>Olá, <strong>{$this->titular}</strong>! Sua conta número <strong>{$this->numeroConta}</strong> foi criada com sucesso.</p>";
    }

    private function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "<p>💰 Depósito de <strong>R$ " . number_format($valor, 2, ',', '.') . "</strong> realizado com sucesso! Seu novo saldo é <strong>R$ " . number_format($this->saldo, 2, ',', '.') . "</strong>.</p>";
        } else {
            echo "<p>⚠️ O valor informado para depósito não é válido.</p>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "<p>💸 Saque de <strong>R$ " . number_format($valor, 2, ',', '.') . "</strong> realizado com sucesso! Seu saldo atual é <strong>R$ " . number_format($this->saldo, 2, ',', '.') . "</strong>.</p>";
        } else {
            echo "<p>❌ Saque não realizado. Você tentou sacar <strong>R$ " . number_format($valor, 2, ',', '.') . "</strong>, mas seu saldo é <strong>R$ " . number_format($this->saldo, 2, ',', '.') . "</strong>. Tente um valor menor.</p>";
        }
    }

    public function verSaldo() {
        return "<p>📌 <strong>{$this->titular}</strong>, seu saldo atual é <strong>R$ " . number_format($this->saldo, 2, ',', '.') . "</strong>.</p>";
    }

    public function realizarDeposito($valor) {
        $this->depositar($valor);
    }
}

$conta = new ContaBancaria("Bianca Maccarini", 1000, "12345-6");

echo $conta->verSaldo();
$conta->realizarDeposito(500);
echo $conta->verSaldo();
$conta->sacar(300);
echo $conta->verSaldo();
$conta->sacar(1500);
?>
