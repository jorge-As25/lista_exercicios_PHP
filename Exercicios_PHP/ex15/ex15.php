<?php

$lado1 = $_POST["lado1"];
$lado2 = $_POST["lado2"];
$lado3 = $_POST["lado3"];

if ($lado1 == $lado2 && $lado2 == $lado3 ){
    echo "equilatero";
}elseif ($lado1 != $lado2 && $lado2 == $lado3) {
    echo "isosceles";
}else{
    echo "escaleno";
}



?>