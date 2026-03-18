<?php
$v = array(1, 2, 4, 5);

echo "Segunda posição do array: " . $v[1];
echo "\n";

echo "Quarta posição do array: " . $v[3];
echo "\n";

$tamanho = count($v);
    for ($i=0; $i <$tamanho ; $i++) { 
        echo $v[$i] . " - ";
}
echo "\n";
foreach ($v as $array) {
    echo $array . " - ";
    
}