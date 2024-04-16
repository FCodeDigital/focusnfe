<?php

namespace FCodeDigital\FocusNfe\Nfce;

class FormaPagamento
{
    public $forma_pagamento;
    public $valor_pagamento;
    public $tipo_integracao = '2';
    public $cnpj_credenciadora;
    public $numero_autorizacao;
    public $bandeira_operadora;

    public function __construct(
        ?string $forma_pagamento = null,
        ?float $valor_pagamento = null,
        ?string $tipo_integracao = '2',
        ?string $cnpj_credenciadora = null,
        ?string $numero_autorizacao = null,
        ?string $bandeira_operadora = null
    ) {

        $this->forma_pagamento = $forma_pagamento;
        $this->valor_pagamento = str_replace(' ', '', str_replace(',', '.', $valor_pagamento));
        $this->tipo_integracao = $tipo_integracao;
        $this->cnpj_credenciadora = $cnpj_credenciadora;
        $this->numero_autorizacao = $numero_autorizacao;
        $this->bandeira_operadora = $bandeira_operadora;
    }

    public function toArray()
    {
        $toReturn = [
            'forma_pagamento' => $this->forma_pagamento,
            'valor_pagamento' => $this->valor_pagamento,
            'tipo_integracao' => $this->tipo_integracao,
            'cnpj_credenciadora' => $this->cnpj_credenciadora,
            'numero_autorizacao' => $this->numero_autorizacao,
            'bandeira_operadora' => $this->bandeira_operadora,
        ];

        //limpa null, false e empty do array
        $toReturn = array_filter($toReturn, function ($value) {
            return !is_null($value) && $value !== false && $value !== '';
        });


        return $toReturn;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}