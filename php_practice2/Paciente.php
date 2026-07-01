<?php

require_once 'Pessoa.php';

class Paciente extends Pessoa {

    private $historicoMedico;

    public function __construct($nome, $idade, $sexo, $historicoMedico) {
        parent::__construct($nome, $idade, $sexo);
        $this->historicoMedico = $historicoMedico;
    }


}

public function exibirDetalhes() {
    echo "Nome: " . $this->nome . "<br>";
    echo "Idade: " . $this->idade . "<br>";
    echo "Sexo: " . $this->sexo . "<br>";
    echo "Histórico Médico: " . $this->historicoMedico . "<br>";

}



?>