<?php 

class ContaBancaria {
    protected string $titular;
    private int $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function apresentarTitular() {
        echo "O titular da conta é " . $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Foram depositados " . $valor . " R$<br>";
    }

    public function sacar($valor) {
        $this->saldo -= $valor;
        echo "Foram sacados " . $valor . " R$<br>";
    }

    public function exibirInformacoes() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: " . $this->saldo . "<br>";
    }
}