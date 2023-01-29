<?php

$array = [
    1 => 'a'
    // '1' => 'b' (imprime apenas o B)
    // 1.5 => 'c' (imprime apenas o C)
    // true => 'd' (imprime apenas o D)
    // Ou int ou string como tipo de index
];

foreach($array as $item){
    echo $item . PHP_EOL;
}