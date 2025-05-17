<?php

$salario = $_POST["salario"];
$aumento = 0;
$salarioFinal =0;

if($salario == 280){
$aumento = (20/100)* $salario;
$salarioFinal = $aumento + $salario;

echo "Seu salario anterior era de $salario reais e você recebeu um aumento de 20%, que fiocu um valor de $aumento reais <br>";
echo "Seu novo salario é de $salarioFinal reais";

}elseif ($salario >280 || $salario <=700){
$aumento = (15/100)* $salario;
$salarioFinal = $aumento + $salario;

echo "Seu salario anterior era de $salario reais e você recebeu um aumento de 15%, que fiocu um valor de $aumento reais <br>";
echo "Seu novo salario é de $salarioFinal reais";

}elseif ($salario >700 || $salario <=1500){
$aumento = (10/100)*$salario;
$salarioFinal = $aumento + $salario;

echo "Seu salario anterior era de $salario reais e você recebeu um aumento de 10%, que fiocu um valor de $aumento reais <br>";
echo "Seu novo salario é de $salarioFinal reais";

}elseif ($salario > 1500){
$aumento = (5/100)* $salario;
$salarioFinal = $aumento + $salario;

echo "Seu salario anterior era de $salario reais e você recebeu um aumento de 5%, que fiocu um valor de $aumento reais <br>";
echo "Seu novo saalrio é de $salarioFinal reais";
}else{
    echo "salario invalido. Tente colocar outro valor";
}

?>