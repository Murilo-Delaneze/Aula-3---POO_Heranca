<?php

require_once "ProdutoDigital.php";
require_once "ProdutoFisico.php";

$produtoDig = new ProdutoDigital('Epic Games', 0.00, 1);
$produtoDig->exibirInformacoes();
$produtoDig->mostrarTamanho();

$produtoFi = new ProdutoFisico('Notebook', 1560, 2000);
$produtoFi->exibirInformacoes();
$produtoFi->mostrarPeso();

?>