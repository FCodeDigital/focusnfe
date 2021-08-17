# FocusNFe PHP Library

Essa library foi criada para facilitar o processo de envio de NFe's e NFCe's utilizando as APIs do [FocusNFe](http://www.focusnfe.com.br/).

## Instalação

Este pacote foi desenvolvido para ser utilizado através do [Composer 2](https://getcomposer.org/). Para instalar, execute o seguinte comando em seu projeto:

```
$ composer require fcodedigital/focusnfe
```

Ou inclua a linha abaixo no seu `composer.json`:

```json
    "require": {
        "fcodedigital/focusnfe" : "^1.0"
    }
```

## Requisitos

É necessário utilizar PHP >= 7.4.

## Uso

```php
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
?>
```

## Desenvolvedores

Este pacote foi desenvolvido por [FCode Desenvolvimento de Sistemas LTDA](https://fcode.digital) e seus colaboradores.

Caso deseje contribuir com melhorias e/ou correções para este pacote, por favor, envie um pull request ou envie um email para ti@fcode.com.br.

Qualquer contribuição é bem vinda e deixa nossos dias muito mais alegres!

Nós acreditamos que a tecnologia está mudando o mundo! Mais do que isso, acreditamos que a tecnologia existe para servir as pessoas. Nosso objetivo é tornar mais fácil a vida das pessoas, a sua vida. A gente acredita que a tecnologia pode melhorar o mundo - e faz isso acontecer - um projeto de cada vez.

Nós somos a FCode!
@fcode.digital
made with <3 by FCode.