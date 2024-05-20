<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <?php 
        $aluno = $_GET['nomeAluno'];
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $nota3 = $_GET['n3'];

        echo "<h1> Média de $aluno do 3A SESI Moreno</h1>";

        $media = ($nota1 + $nota2 + $nota3) / 3;
        $mediaArredondada = round($media);
        echo "A sua média foi $mediaArredondada";
        
        if($mediaArredondada >= 8){
            echo "<h4 style='color:green'> Aprovado </h4>";
        }else{
            echo "<h4 style='color:red'> Reprovado </h4>";
        }
    ?>
    <button onclick="window.location.href='addNotas.html'">Voltar</button>
</body>
</html>