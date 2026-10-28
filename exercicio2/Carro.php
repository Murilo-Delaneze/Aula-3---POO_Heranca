<?php

require_once 'Veiculo.php';

class Carro extends Veiculo{
    private int $qntPortas;

    public function __construct($marca, $ano, $qntPortas){
        parent::__construct($marca, $ano);
        $this->qntPortas = $qntPortas;
    }

    public function mostrarPortas(){
        echo 'Quantidade de Portas: ' . $this->qntPortas . '<br>';
    }
}

?>