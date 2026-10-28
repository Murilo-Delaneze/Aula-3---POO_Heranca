<?php

require_once "Carro.php";
require_once "Moto.php";

$carro = new Carro('Honda', 17, 4);
$carro->exibirInformacoes();
$carro->mostrarPortas();

$moto = new Moto('BMW', 20, 250);
$moto->exibirInformacoes();
$moto->mostrarCilindradas();

?>