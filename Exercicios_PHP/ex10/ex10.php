<?php

$turno = $_POST["turno"];

if($turno == "m-matutino"){
    echo "BOM DIA!!";
}elseif ($turno == "v-vespertino") {
    echo "BOA TARDE!!";
}elseif ($turno == "n-noturno") {
    echo "BOA NOITE!!";
}else{
    echo "turno invalido";
}

?>