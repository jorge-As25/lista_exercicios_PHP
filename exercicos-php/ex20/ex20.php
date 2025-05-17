<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$media = 0;


$media = ($nota1 + $nota2 + $nota3)/3;
if($media >= 7 &&  $media < 10){
    echo "APROVADO. Sua nota é $media";
}elseif ($media < 7) {
    echo "REPROVADO. Sua nota é $media";
}elseif ($media == 10) {
    echo "APROVADO COM DISTINÇÃO. Sua nota é $media"; 
}

?>