<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis com números reais</title>
</head>
<body>
    <?php 
        $pi = 3.14159;
        $raio = 5.2;
        $area = $raio*pow($raio, 2);
        echo "A área é igual a <br>".$area;
        echo "<br> Área formatada = ".number_format($area,2);
        ?>
    
</body>
</html>