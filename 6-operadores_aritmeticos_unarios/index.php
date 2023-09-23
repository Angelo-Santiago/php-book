<?php 
    $a = 10;
    $b = 5;
    $c = 5;
    $a++;  // adiciona 1 unidade
    echo "O valor de a = ".$a;

    $a+= 5;
    echo "<br>valor de a  = ".$a;
    $r = ($b++)*2;
    echo "<br>valor de r  = ".$r;

    $r = (++$b)* 2 ;
    $r+= 5;
    echo "<br>o valor de r =  ".$r;
?>