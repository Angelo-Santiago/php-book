<?php 
    $nota1 = 7;
    $nota2 = 4;
    $media = ($nota1 + $nota2) / 2 ;


    if($media >=7.0){
        echo "<br> Aluno aprovado";
    }
    else if($media >=4.0 &&  $media < 7.0){
        echo "<br> Aluno em exame";
    }
    else{
        echo"<br> Aluno reprovado";
    }
?>