<?php

class Pessoa{

    public $nome; //Atributo

    public function falar(){//Método
       
        return "O meu nome é ".$this->nome;
    
    }

}

$glaucio = new Pessoa();
$glaucio->nome = "Weder Monteiro Araujo";
echo $glaucio->falar();

?>