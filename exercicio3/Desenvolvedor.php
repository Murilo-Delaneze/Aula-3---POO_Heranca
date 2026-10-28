<?php

require_once 'Funcionario.php';

class Desenvolvedor extends Funcionario {
    private string $linguagemPrincipal;

    public function __construct($nome, $salario, $linguagemPrincipal) {
        parent::__construct($nome, $salario);
        $this->linguagemPrincipal = $linguagemPrincipal;
    }

    public function programar() {
        $this->mostrarNome();
        echo 'Salário: R$ ' . $this->getSalario() . '<br>';
        echo 'Linguagem: ' . $this->linguagemPrincipal . '<br>';
        echo 'Atividade: Desenvolvendo sistemas.<br>';
    }
}
?>
