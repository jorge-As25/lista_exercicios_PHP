<?php

$letra = $_POST["letra"];

if($letra == "a" || $letra == "b" || $letra == "c" || $letra == "d" || $letra == "e" ){
    echo "A letra $letra é vogal";
}
else{
    echo "A letra $letra é consoante";
}


?>