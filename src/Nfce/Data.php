<?php

namespace FCodeDigital\FocusNfe\Nfce;

class Data
{

    public ?string $cnpj_emitente = null;
    public ?string $cpf_destinatario = null;
    public ?string $nome_destinatario = null;
    public ?float $valor_produtos = null;
    public ?float $valor_total = null;
    public ?float $valor_troco = null;
    public ?float $valor_desconto = null;
    public ?float $valor_total_tributos = null;
    public ?string $data_emissao = null;
    public ?string $indicador_inscricao_estadual_destinatario = null;
    public ?string $modalidade_frete = null;
    public ?string $forma_pagamento = null;
    public ?string $tipo_documento = null;
    public ?string $finalidade_emissao = null;
    public ?string $local_destino = null;
    public ?string $consumidor_final = null;
    public ?string $presenca_comprador = null;
    public ?string $natureza_operacao = null;
    public ?float $icms_base_calculo = null;
    public ?float $icms_valor_total = null;
    public ?float $valor_outras_despesas = null;
    public ?float $valor_seguro = null;
    public ?float $valor_frete = null;
    public array $items;

    public function __construct(
        ?string $cnpj_emitente = null,
        ?string $cpf_destinatario = null,
        ?string $nome_destinatario = null,
        ?float $valor_produtos = null,
        ?float $valor_total = null,
        ?float $valor_troco = null,
        ?float $valor_desconto = null,
        ?float $valor_total_tributos = null,
        ?string $data_emissao = null,
        ?string $indicador_inscricao_estadual_destinatario = null,
        ?string $modalidade_frete = null,
        ?string $forma_pagamento = null,
        ?string $tipo_documento = null,
        ?string $finalidade_emissao = null,
        ?string $local_destino = null,
        ?string $consumidor_final = null,
        ?string $presenca_comprador = null,
        ?string $natureza_operacao = null,
        ?float $icms_base_calculo = null,
        ?float $icms_valor_total = null,
        ?float $valor_outras_despesas = null,
        ?float $valor_seguro = null,
        ?float $valor_frete = null,
        ?array $items = []
    ) {
        $this->cnpj_emitente = $cnpj_emitente;
        $this->cpf_destinatario = $cpf_destinatario;
        $this->nome_destinatario = $nome_destinatario;
        $this->valor_produtos = $valor_produtos;
        $this->valor_total = $valor_total;
        $this->valor_troco = $valor_troco;
        $this->valor_desconto = $valor_desconto;
        $this->valor_total_tributos = $valor_total_tributos;
        $this->data_emissao = $data_emissao;
        $this->indicador_inscricao_estadual_destinatario = $indicador_inscricao_estadual_destinatario;
        $this->modalidade_frete = $modalidade_frete;
        $this->forma_pagamento = $forma_pagamento;
        $this->tipo_documento = $tipo_documento;
        $this->finalidade_emissao = $finalidade_emissao;
        $this->local_destino = $local_destino;
        $this->consumidor_final = $consumidor_final;
        $this->presenca_comprador = $presenca_comprador;
        $this->natureza_operacao = $natureza_operacao;
        $this->icms_base_calculo = $icms_base_calculo;
        $this->icms_valor_total = $icms_valor_total;
        $this->valor_outras_despesas = $valor_outras_despesas;
        $this->valor_seguro = $valor_seguro;
        $this->valor_frete = $valor_frete;
        $this->items = $items;
    }

    //set items
    public function addItem(\FCodeDigital\FocusNfe\Nfe\Items $item)
    {
        $this->items[] = $item;
    }

    //get items
    public function getItems()
    {
        return $this->items;
    }

    //to array
    public function toArray()
    {
        $data = [
            'cnpj_emitente' => $this->cnpj_emitente,
            'cpf_destinatario' => $this->cpf_destinatario,
            'nome_destinatario' => $this->nome_destinatario,
            'valor_produtos' => $this->valor_produtos,
            'valor_total' => $this->valor_total,
            'valor_troco' => $this->valor_troco,
            'valor_desconto' => $this->valor_desconto,
            'valor_total_tributos' => $this->valor_total_tributos,
            'data_emissao' => $this->data_emissao,
            'indicador_inscricao_estadual_destinatario' => $this->indicador_inscricao_estadual_destinatario,
            'modalidade_frete' => $this->modalidade_frete,
            'forma_pagamento' => $this->forma_pagamento,
            'tipo_documento' => $this->tipo_documento,
            'finalidade_emissao' => $this->finalidade_emissao,
            'local_destino' => $this->local_destino,
            'consumidor_final' => $this->consumidor_final,
            'presenca_comprador' => $this->presenca_comprador,
            'natureza_operacao' => $this->natureza_operacao,
            'icms_base_calculo' => $this->icms_base_calculo,
            'icms_valor_total' => $this->icms_valor_total,
            'valor_outras_despesas' => $this->valor_outras_despesas,
            'valor_seguro' => $this->valor_seguro,
            'valor_frete' => $this->valor_frete,
        ];

        $data['items'] = [];
        if($this->items) {
            foreach ($this->items as $item) {
                $data['items'][] = $item->toArray();
            }
        }

        return $data;
    }

    //to json
    public function toJson()
    {
        return json_encode($this->toArray());
    }

}