<?php
$valorA = $_POST["valor1"];
$valorB = $_POST["valor2"];
$valorC = $_POST["valor3"];
$delta = 0;
$x1 = 0;
$x2 = 0;

if($valorA == 0){
    echo "A equação não é de segundo grau <br>";
    echo "porgrama encerrado";
}else{
    $delta = ($valorB*$valorB) - 4 * $valorA*$valorC;
    if($delta < 0){
        echo " A equação não possui raizes";
    }elseif($delta == 0){
        echo "A equação possui apenas uma raiz";
    }else{
        "A equação possui duas raizes";
    }
}

?>