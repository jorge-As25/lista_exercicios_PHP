<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];


$media = ($nota1 + $nota2)/2;

if($media >= 7 || $media < 10){
echo "aprovado";
}elseif ($media >= 0 || $media <7) {
    echo "reprovado";
}elseif ($media == 10) {
    echo "aprovado com distinção";
}


