<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pista</title>
</head>
<body>

    <h1>
        ________________________________________
    </h1>
    <h3>
        <br>
        -------------------------------------------------------------------------------------------------------
    </h3>
    <h1>
        ________________________________________
    </h1>

    <?php 
    
        require_once('Carro.php');//Chamada da classe carro

        $meu_carro = new Carro;//instanciando um novo objeto carro

        $meu_carro->ligar();

        $meu_carro->andar();
    ?>
</body>
</html>