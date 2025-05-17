<?php
$numero = $_POST["numero"];

if( $numero == 1 ){
    echo "domingo";
}elseif ($numero ==2) {
    echo "segunda-feira";
}elseif ($numero ==3) {
    echo "Terça-feira";
}elseif ($numero ==4) {
    echo "Quarta-feira";
}elseif ($numero ==5) {
    echo "Quinta-feira";
}elseif ($numero ==6) {
    echo "Sexta-feira";
}elseif ($numero ==7) {
    echo "sabado";
}else{
    echo "numero invalido";
}



?>