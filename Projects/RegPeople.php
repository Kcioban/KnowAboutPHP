<?php
class Pessoa{
    public $nome;
    public $idade;
    
    public function __construct($nome, $idade){
        $this ->nome = $nome;
        $this ->idade = $idade;
    }
    
    public function printNomeEIdade(){
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
    
}

    $pessoa = new Pessoa('Rafael', '5');
    $pessoa ->printNomeEIdade();
    echo '
';
    $pessoa0 = new Pessoa('Manuela', '6');
    $pessoa0 ->printNomeEIdade();
    echo '
';
    $pessoa2 = new Pessoa('Julia', '18');
    $pessoa2 ->printNomeEIdade();
    echo '
';    
    $pessoa3 = new Pessoa('Kayky', '19');
    $pessoa3 ->printNomeEIdade();
    echo '
';    
    
?>
