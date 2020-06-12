<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Weder Monteiro Araujo");
$cad->setEmail("agenciaolhardigital@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();



?>