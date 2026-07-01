<?php


class Pessoa {

    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

}


public function exibirDetalhes() {
    echo "Nome: " . $this->nome . "\n";
    echo "Idade: " . $this->idade . "\n";
}


?>