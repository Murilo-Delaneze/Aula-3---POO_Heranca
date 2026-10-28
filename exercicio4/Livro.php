<?php

require_once 'Publicacao.php';

class Livro extends Publicacao{
    private string $autor;

    public function __construct($titulo, $anoPublicacao, $autor){
        parent::__construct($titulo, $anoPublicacao);
        $this->autor = $autor;
    }

    public function mostrarAutor(){
        echo 'Autor: ' . $this->autor . '<br>';
    }
}

?>