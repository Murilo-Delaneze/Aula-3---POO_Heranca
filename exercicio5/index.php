<?php

require_once "Cachorro.php";
require_once "Gato.php";

$cachorro = new Cachorro('Robson', 10, 'Vira Lata');
$cachorro->exibirInformacoes();
$cachorro->mostrarRaca();
$cachorro->latir();

$gato = new Gato('Wellyghtom', 5, 'Laranja');
$gato->exibirInformacoes();
$gato->mostrarCor();
$gato->miar();

?>