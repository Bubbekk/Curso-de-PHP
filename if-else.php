<?php


$edad = 1;

if($edad == 18 ){
    echo "Eres mayor de edad";
}elseif($edad > 18 && $edad < 64 ){
    echo "Eres mayor a 18 años";
}elseif($edad >= 65 ){
    echo "Eres adulto mayor";
}else{
    echo "Eres menor de edad";
}