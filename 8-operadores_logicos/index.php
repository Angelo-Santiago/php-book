<?php 
    $a = 10;
    $b = 6;
    $r = (($b+$b)==12 && $b!=6);
    echo "Resultado operador E = ".$r;

    $r =(($b+$b)== 12 || $b!=6);
    echo "<br>Restulado operador OU : ".$r;
    echo"<br>Resultado para NÃO : ".!$r;
?>

