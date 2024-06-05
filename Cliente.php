<?php 
class Cliente extends Pessoa{

    private $login;
    private $senha;

    function comprar(){
        echo "Compra realizada! por ".$this->nome;
    }

}

?>