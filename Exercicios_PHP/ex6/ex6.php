<?php

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$num3 = $_POST["numero3"];

if($num1 > $num2 && $num1 > $num3){
    echo "O maior numero é $num1";
}elseif ($num2 > $num1 && $num2 > $num3){
    echo "O maior numero é $num2";
}else{
    echo "O maior numero é $num3";
}
?>