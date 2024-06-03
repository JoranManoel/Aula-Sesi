<?php 
    //Cria a função
    function soma_valores_sem_retorno($valor1, $valor2, $valor3){
        $soma = $valor1 + $valor2 + $valor3;

        echo " A soma dos valores $valor1 + $valor2 + $valor3 <br>";
        echo "É igual a $soma <br><br>";

    }

    echo "<h1>Aula Funções em PHP</h1>";

    echo "<h5>Chamada da função com retorno de valor</h5>";

    //Chamada da função
    soma_valores_sem_retorno(1,2,3);

    //Segundo exemplo de função com retorno de valor
    function soma_valores_com_retorno($valor1, $valor2, $valor3){
        $soma = $valor1 + $valor2 + $valor3;

        return $soma;
    }

    echo "<h5>Chamada da função com retorno de valor</h5>";

    //chama a função e armazena o valor retornado na variável
    $total = soma_valores_com_retorno(2,5,9);

    echo "O valor total é $total";

    echo "<hr>";
    echo "<h2>Funções de manipulação de strings</h2>";

    function maiusculo($string){

        //Tranforma todos os caracteres
        $string = strtoupper($string);

        //Troca os valores dos caracteres
        $string = str_replace("á","Á",$string);
        $string = str_replace("é","É",$string);
        $string = str_replace("í","Í",$string);
        $string = str_replace("ó","Ó",$string);
        $string = str_replace("ú","Ú",$string);
        
        return $string;
    }

    function trans($nome){
        $nome = str_replace("o", "ete", $nome);

        return $nome;
    }

    $nome = "Danilo";

    $nome_maiusculo = maiusculo($nome);

    $nome_f = trans($nome);

    echo "Seu nome é $nome e seu nome maiúsculo é $nome_maiusculo <br><br>";
    echo "Seu nome femenino é $nome_f";

    //Criação de função com retorno de Array
  
    echo "<hr>";
    echo "<h2>Arrays</h2>";

    function capitais(){
        $capitais = ["Recife", "São Paulo", "João Pessoa", "Natal"];

        return $capitais;

    }

    $capitais = capitais();

    echo "Impresso com FOR <br>";
    for($i = 0 ; $i<sizeof($capitais);$i++){
        echo "$capitais[$i], ";
    }
    echo "<br><br>";
    echo "Impresso com FOREACH";
    foreach($capitais as $nome){
        echo "<br> $nome";
    }
  
?>