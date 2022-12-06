<?php 

For ($contador = 1; $contador <= 15; $contador ++ ){
    if ($contador == 13)  {       // ! -> Diferente
        continue;  //Break
    }
    echo "#$contador" . PHP_EOL;
}

