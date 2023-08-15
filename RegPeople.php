<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Criando um objeto da classe Pessoa
$joao = new Pessoa("João", 30);

// Chamando o método da classe
echo $joao->apresentar();

?>
