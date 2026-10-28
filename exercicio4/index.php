<?php

require_once "Livro.php";
require_once "Revista.php";

$livro = new Livro('A Historia da Honda', 1999, 'Rogerio Ceni');
$livro->exibirInformacoes();
$livro->mostrarAutor();

$livro2 = new Livro('Livro Amarelo', 1797, 'Mbappe');
$livro2->exibirInformacoes();
$livro2->mostrarAutor();

$Revista = new Revista('Roboticário', 2019, 'Vogue');
$Revista->exibirInformacoes();
$Revista->mostrarEdicao();

?>