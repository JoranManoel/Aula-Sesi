<?php 
    class Carro{
        private $cor;
        private $marca;
        private $modelo;
        private $ligado = false;

        function ligar(){
            if($this->ligado == false){
                echo "Carro ligado...";
                $this->ligado = true;
            }else{
                echo "Erro o carro já está ligado";
            }
        }

        function desligar(){
            if($this->ligado == true){
                $this->ligado = false;
                echo "Carro desligado!";
            }else{
                echo "O carro já está desligado";
            }
            
        }

        function get_cor(){
            return $this->cor;
        }

        function set_cor($cor){
            $this->cor = $cor;
        }

        function get_modelo(){
            return $this->modelo;
        }

        function set_modelo($modelo){
            $this->modelo = $modelo;
        }

        function get_marca(){
            return $this->marca;
        }

        function set_marca($marca){
            $this->marca = $marca;
        }

        function andar(){
            if($this->ligado == true){
                echo "🚗";
            }else{
                echo "Você precisa ligar o carro para poder andar!";
            }
        }
    }

?>