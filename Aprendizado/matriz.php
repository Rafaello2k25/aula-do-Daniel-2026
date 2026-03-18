<?php
$pokemon = array("nome" => "Pikachu", "tipo" => "Elétrico");
$pokemon2 = array("nome" => "Charizard", "tipo" => "Fogo");
$pokemon3 = array("nome" => "Zoro", "tipo" => "Santoryu");

$pokemons = array($pokemon, $pokemon2, $pokemon3);

echo "Nome do segundo pokemon: " . $pokemons[1]["nome"] . "\n";
