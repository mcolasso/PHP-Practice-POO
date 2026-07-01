<?php
    
require_once 'Pessoa.php';
require_once 'Professor.php';

$professor = new Professor("João", 40, 5000);
$professor->exibirDetalhes();

$pessoa = new Pessoa("Maria", 30);
$pessoa->exibirDetalhes();


?>