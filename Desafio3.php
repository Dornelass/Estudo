<?php

$altura = 1.56;
$peso = 62;
$imc = $peso / $altura ** 2;

 if ($imc < 18 ){
     echo "magreza";
}
elseif ($imc > 18.1 && $imc < 25){
    echo "normal";
}
else {
    echo "sobrepeso";
}