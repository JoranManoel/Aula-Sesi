<?php 
        $dia = "Terça" ;
        $temperatura = 0 ;

        if($temperatura > 25 ){
            $clima = "ensolarado";
        }elseif($temperatura <= 25 && $temperatura >= 18){
            $clima  =  "chuvoso" ;
        }elseif($temperatura < 18){
            $clima = "nevando";
        }

        echo "O clima hoje está $clima a temperatura está $temperatura º e o dia hoje é $dia feira. <br>";

        $nomes = array("João Vitor", "Roberto Pink", "Jennifer", "Emyllie", "B. Letigo");

        echo "<br>";

        for($i=0; $i <= 4; $i++){
            echo "<br>";
            echo $nomes[$i];
        };
        echo "<br><hr>" ;
        $total = 0 ;
        foreach ($nomes as $nome) {
           echo "<br>";
           echo $nome;
           $total++ ;
        };

        echo "<br>";
        echo "<b>A quantidade total de nomes é $total </b>";

    ?>