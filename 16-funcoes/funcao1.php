<?php 
function venda(&$v, $d, $c){
    $v -= $v*($d/100);
    $d = $v/$c;
    return $d;
}
$venda=100;
$desconto = 10;
$cambio = 2.7;
$dolar=venda($venda, $desconto, $cambio);
    echo "Valor da venda = ".$venda;
    echo "<br>Valor em dólar ".$dolar;
?>