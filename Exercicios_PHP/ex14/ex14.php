<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media = 0;

$media = ($nota1 + $nota2)/2;

if($media >= 9 && $media <=10){
echo "Nota A. Aprovado";
}elseif($media >= 7.5 && $media <9){
    echo "Nota B. Aprovado ";
}elseif($media >= 6 && $media <7.5){
    echo "Nota C. Aprovado ";
}elseif($media >= 4 && $media <6){
    echo "Nota D. Reprovado ";
}elseif($media >= 0 && $media <4){
    echo "Nota E. Reprovado ";
}else{
    echo "nota invalida";
}
