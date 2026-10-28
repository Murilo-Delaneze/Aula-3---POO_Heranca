<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente = new Gerente('Roberto', 4500, 'Tecnologia em Biomecanica');
$gerente->gerenciarEquipe();

echo '<br>';

$dev = new Desenvolvedor('Lucas', 800, 'Programador de Front-End');
$dev->programar();

?>
