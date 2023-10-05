<?php 
    function incremento(&$a, $b){
        $a++;
        $b++;
}

$a= 10;
$b = 10;
incremento($a, $b);
echo $a;
echo"<br>".$b;
?>