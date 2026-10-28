<?php

require_once "ALuno.php";
require_once "Professor.php";

$aluno = new Aluno('Murilo', 17, "DS");
$aluno->exibirInformacoes();
$aluno->exibirCurso();

$professor = new Professor('Marcos', 47, "Banco de Dados");
$professor->exibirInformacoes();
$professor->exibirDisciplina();

?>