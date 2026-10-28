<?php

class Veiculo{
    protected string $marca;
    private int $ano;

    public function __construct($marca, $ano){
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function apresentarMarca(){
        echo "A marca do Veículo é " . $this->marca;
    }
    public function getAno(){
        return $this->ano;
    }

    public function exibirInformacoes(){
        echo 'Marca: ' . $this->marca . '<br>';
        echo 'Ano:' . $this->ano . '<br>';
    }
}

?>