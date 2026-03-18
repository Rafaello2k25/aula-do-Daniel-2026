<?php
$pessoa = array("nome" => "Rafael",
                "profissão" => "aluno",
                "idade" => 18);

echo "O Rafael tem " . $pessoa["idade"] . " anos\n";

foreach($pessoa as $chave => $dado){
    echo $chave . " = " . $dado . "\n";
}