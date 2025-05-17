<?php

$respostas = $_POST["resposta"];
$positivas = 0;

foreach ($resposta as $resposta){
    if (strtolower(trim($respostas)) == "sim") {
        $positivas++;
    }

}
if($positivas == 2){
    echo "classificação suspeito";
}elseif ($positivas >= 3 && $positivas <=4) {
    echo "classificado cumplice";
}elseif ($positivas == 5) {
    echo "classificado assassino";
}else{
    echo "inocente";
}