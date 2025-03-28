<?php

require __DIR__ . '/vendor/autoload.php';

$nfeData = new FCodeDigital\FocusNfe\Nfe\Data(
    "Remessa",
    "2017-04-15",
    "2017-04-15",
    1,
    1,
    "SEU_CNPJ",
     "SEU_CPF",
    "Sua Raz\u00e3o Social Ltda",
    "Fantasia do Emitente",
    "Rua Quinze de Abril",
    999,
    "Jd Paulistano",
    "S\u00e3o Paulo",
    "SP",
    "01454-600",
    "SUA_INSCRICAO_ESTADUAL",
    "NF-E EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL",
    "03055054911",
    null,
    1196185555,
    "Rua S\u00e3o Janu\u00e1rio",
    99,
    "Crespo",
    "Manaus",
    "AM",
    "Brasil",
    69073178,
    0.0,
    0,
    47.23,
    47.23,
    0,
);


$item = new FCodeDigital\FocusNfe\Nfe\Items(
    "1",
    "1232",
    "Cartu00f5es de Visita",
    "6923",
    "un",
    "100",
    "0.4723",
    "0.4723",
    "un",
    "49111090",
    "100",
    "47.23",
    "400",
    "0",
    "07",
    "07"
);

$nfeData->addItem($item);
$nfeData->addItem($item);




$nfe = new FCodeDigital\FocusNfe\Nfe(
    'testing',
    '[SUA CHAVE AQUI]'
);

try {
    $enviar = $nfe->enviar('123456789123456', $nfeData);
    // $cancelar = $nfe->cancelar('123456789123456', 'justificativadddd');
} catch (\Throwable $th) {
    echo '<pre>';die(var_dump($th->getMessage(), $th->getCode()));
}

list($http_code, $response) = $enviar;

echo '<pre>';die(var_dump($http_code, $response));