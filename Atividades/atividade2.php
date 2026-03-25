<?php

$pessoa1 = array(
    "Nome" => "Rafael Guilherme",
    "Endereço" => "Av. Clóvis Roberto Fontoura",
    "Cidade" => "Foz do Iguaçu",
    "UF" => "Paraná"
);

$pessoa2 = array(
    "Nome" => "Roberto",
    "Endereço" => "Rua 180 bolinha",
    "Cidade" => "Pindamoiangaba",
    "UF" => "Não sei"
);

$pessoa3 = array(
    "Nome" => "Lara",
    "Endereço" => "Rua das Acácias, 742",
    "Cidade" => "Bairro Jardim Primavera",
    "UF" => "Campinas"
);

$pessoa4 = array(
    "Nome" => "Douglas",
    "Endereço" => "Avenida Beira-Mar, 1589",
    "Cidade" => "Bairro Meireles",
    "UF" => "Fortaleza"
);

$pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4);
echo "Nome      |     Endereço     |     Cidade     |    UF \n";
foreach ($pessoas as $p) {
    echo $p["Nome"] . " | " . $p["Endereço"] . " | " . $p["Cidade"] . " | " . $p["UF"] . "\n";
}
