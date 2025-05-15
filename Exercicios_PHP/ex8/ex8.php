<?php

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$num3 = $_POST["numero3"];


if($num1 < $num2 && $num1 < $num3){
    echo  "O produto mais recomendado para se comprar é o de $num1 reais, por ser o mais barato";
}elseif ($num2 < $num1 && $num2 < $num3){
    echo  "O produto mais recomendado para se comprar é o de $num2 reais, por ser o mais barato";
}else{
    echo  "O produto mais recomendado para se comprar é o de $num3 reais, por ser o mais barato";
}

