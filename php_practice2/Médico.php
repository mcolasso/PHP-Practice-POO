<?php

require_once 'Pessoa.php';

class Médico extends Pessoa {

    private $especialidade;

    public function __construct($nome, $idade, $sexo, $especialidade) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
    }

    public function exibirDetalhes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Sexo: " . $this->sexo . "<br>";
        echo "Especialidade: " . $this->especialidade . "<br>";
    }

}

?>