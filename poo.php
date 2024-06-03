<h1>Programação Orientada a Objetos em PHP</h1>
<?php 

    class Caneta{
        private $dono;
        var $cor;
        var $marca;
        Var $tampado = true;

        function get_dono(){
            return $this->dono;
        }

        function set_dono($dono){
            $this->dono = $dono;
        }

        function abrir_tampa(){
            if($this->tampado == true){
                $this->tampado = false;
            }
        }

        function escrever(){
            if($this->tampado){
                echo "";
            }else{
                echo "<i style = 'color:$this->cor' >Escrevendo...</i>";
                echo "<hr>";
            }
            
        }

        static function quebrar(){
            echo "Quebrou! ;(";
        }

        function mostrar_informacao(){
            echo "<br>Dono: $this->dono <br> Marca: $this->marca <br>  Cor: $this->cor <br>";
        }

    }

    class Lapis extends Caneta{
        var $tem_borracha = false;

        function apagar(){
            if($this->tem_borracha){
                echo "_______________";
            }
        }

    }
    
    //Criando a primeira instância do objeto Caneta
    $joran_pen = new Caneta;
    $joran_pen->set_dono("Joran");
    $joran_pen->cor = "Blue";
    $joran_pen->marca = "Bic";

    //Criando a segunda instância do objeto Caneta
    $roberto_pen = new Caneta;
    $roberto_pen->set_dono("Roberto");
    $roberto_pen->cor = "Red";
    $roberto_pen->marca = "Compact";

    //Criando a terceira instância do objeto Caneta
    $milena_pen = new Caneta;
    $milena_pen->set_dono("Milena");
    $milena_pen->cor = "Pink";
    $milena_pen->marca = "Monblanc";

    $joran_pen->abrir_tampa();
    $joran_pen->escrever();

    $milena_pen->abrir_tampa();
    $milena_pen->escrever();

    $roberto_pen->abrir_tampa();
    $roberto_pen->escrever();

    Caneta::quebrar();

    echo "<br><br>";
    echo "<h4>Escrevendo a lápis</h4>";
    $lapis_de_brenno = new Lapis;
    
    // $lapis_de_brenno->escrever();
    $lapis_de_brenno->tem_borracha = true;
    $lapis_de_brenno->apagar();

    $lapis_de_brenno->set_dono("Brenno");
    $lapis_de_brenno->mostrar_informacao();




?>