<?php

$letra = $_POST["letra"];

if($letra == "f"){
    echo "FEMININO";
}elseif($letra == "m"){
    echo "MASCULINO";
}else{
    echo "letra invalida";
}