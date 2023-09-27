<?php 
    $a = 6;
    $b = 10;
    $operacao = '/';
    switch($operacao){

        case '+';
        $r = $a + $b;
    break;

        case '-';
        $r = $a - $b;
    break;

        case '*';
        $r = $a * $b;
    break;

        case '/';
        $r = $a / $b;
    break;
        default:
        $r = "operador inválido";
        break;
    }

    echo "Resultado : ".$r;

    

?>