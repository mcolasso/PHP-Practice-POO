<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {

    private $salario;

    public function __construct($nome, $idade, $salario) {
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }


}


public function exibirDetalhes() {
    echo "Nome: " . $this->nome . "\n";
    echo "Idade: " . $this->idade . "\n";
    echo "Salário: " . $this->salario . "\n";
}


?>