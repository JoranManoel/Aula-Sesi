<?php 

class Pessoa{

    protected $nome = "Joran";
    protected $cpf;


    static function falar(){
        echo "Oi!";
    }

    function get_nome(){
        return $this->nome;
    }
    function set_nome($nome){
        $this->nome = $nome;
    }

}

?>