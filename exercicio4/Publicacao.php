<?php

class Publicacao{
    protected string $titulo;
    private int $anoPublicacao;

    public function __construct($titulo, $anoPublicacao){
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getAnoPubli(){
        return $this->anoPublicacao;
    }

    public function exibirInformacoes(){
        echo 'Titulo: ' . $this->titulo . '<br>';
        echo 'Ano de Publicacao:' . $this->anoPublicacao . '<br>';
    }
}

?>