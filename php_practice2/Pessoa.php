<?php

class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

}

public function exibirDetalhes() {
    echo "Nome: " . $this->nome . "<br>";
    echo "Idade: " . $this->idade . "<br>";
    echo "Sexo: " . $this->sexo . "<br>";
}



?>