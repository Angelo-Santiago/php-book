<?php 
    $numero =0;
    while($numero < 10){
        $num = rand(0,100);
        if($num%2==0){
            echo $num."<br>";
            $numero++;
        }
    }
?>