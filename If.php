<?php

$idade = 17;
$Pessoas = 2;

// echo "Vc só pode entrar se tiver mais do que 18" . PHP_EOL;

if ($idade >= 18){  // Pode usar || ou OR --> ($idade == 18 || $idade > 18)
    echo "Vc tem $idade anos \n" ;
    echo  "Pode entrar";
}

else if ($idade >= 16 && $Pessoas > 1){
        echo 'Pode por estar acompanhado';
}

else {
    echo "Vc só tem $idade anos e sem acompanhante";
}



