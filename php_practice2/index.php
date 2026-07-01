<?php

require_once 'Pessoa.php';
require_once 'Médico.php';
require_once 'Paciente.php';

// Criando um objeto Paciente
$paciente = new Paciente("João Silva", 30, "Masculino", "Nenhum histórico relevante");
echo "<h2>Detalhes do Paciente:</h2>";
$paciente->exibirDetalhes();

// Criando um objeto Médico
$medico = new Médico("Dra. Maria Souza", 40, "Feminino", "Cardiologia");
echo "<h2>Detalhes do Médico:</h2>";
$medico->exibirDetalhes();


?>