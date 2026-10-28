<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$contaCor = new ContaCorrente('1750', 0.00, 12345678910);
$contaCor->exibirInformacoes();
$contaCor->depositar(200);
$contaCor->mostrarCartao();
$contaCor->exibirInformacoes();

$contaPou = new ContaPoupanca('1750', 1560, 'Investimento em Ações');
$contaPou->exibirInformacoes();
$contaPou->sacar(200);
$contaPou->mostrarObjetivo();
$contaPou->exibirInformacoes();

?>