<?php

namespace FCodeDigital\FocusNfe\Nfce;

class Items
{
    // numero_item
    // codigo_produto
    // descricao
    // cfop
    // quantidade_comercial
    // quantidade_tributavel
    // valor_unitario_comercial
    // valor_unitario_tributavel
    // unidade_comercial
    // unidade_tributavel
    // valor_frete
    // valor_bruto
    // valor_desconto
    // codigo_ncm
    // inclui_no_total
    // icms_origem
    // icms_situacao_tributaria
    // pis_situacao_tributaria
    // cofins_situacao_tributaria

    public ?string $numero_item;
    public ?string $codigo_produto;
    public ?string $descricao;
    public ?string $cfop;
    public ?string $cest;
    public ?string $quantidade_comercial;
    public ?string $quantidade_tributavel;
    public ?string $valor_unitario_comercial;
    public ?string $valor_unitario_tributavel;
    public ?string $unidade_comercial;
    public ?string $unidade_tributavel;
    public ?string $valor_frete;
    public ?string $valor_bruto;
    public ?string $valor_desconto;
    public ?string $codigo_ncm;
    public ?string $inclui_no_total;
    public ?string $icms_origem;
    public ?string $icms_situacao_tributaria;
    public ?string $pis_situacao_tributaria;
    public ?string $cofins_situacao_tributaria;
    public int $icms_modalidade_base_calculo = 3;



    public function __construct(
        ?string $numero_item = null,
        ?string $codigo_produto = null,
        ?string $descricao = null,
        ?string $cfop = null,
        ?string $cest = null,
        ?string $quantidade_comercial = null,
        ?string $quantidade_tributavel = null,
        ?string $valor_unitario_comercial = null,
        ?string $valor_unitario_tributavel = null,
        ?string $unidade_comercial = null,
        ?string $unidade_tributavel = null,
        ?float $valor_frete = null,
        ?float $valor_bruto = null,
        ?float $valor_desconto = null,
        ?string $codigo_ncm = null,
        ?string $inclui_no_total = null,
        ?string $icms_origem = null,
        ?string $icms_situacao_tributaria = null,
        ?string $pis_situacao_tributaria = null,
        ?string $cofins_situacao_tributaria = null
    ) {
        $this->numero_item = $numero_item;
        $this->codigo_produto = $codigo_produto;
        $this->descricao = $descricao;
        $this->cfop = $cfop;
        $this->cest = $cest;
        $this->quantidade_comercial = $quantidade_comercial;
        $this->quantidade_tributavel = $quantidade_tributavel;
        $this->valor_unitario_comercial = str_replace(' ', '', str_replace(',', '.', $valor_unitario_comercial));
        $this->valor_unitario_tributavel = str_replace(' ', '', str_replace(',', '.', $valor_unitario_tributavel));
        $this->unidade_comercial = $unidade_comercial;
        $this->unidade_tributavel = $unidade_tributavel;
        $this->valor_frete = str_replace(' ', '', str_replace(',', '.', $valor_frete));
        $this->valor_bruto = str_replace(' ', '', str_replace(',', '.', $valor_bruto));
        $this->valor_desconto = str_replace(' ', '', str_replace(',', '.', $valor_desconto));
        $this->codigo_ncm = $codigo_ncm;
        $this->inclui_no_total = $inclui_no_total;
        $this->icms_origem = $icms_origem;
        $this->icms_situacao_tributaria = $icms_situacao_tributaria;
        $this->pis_situacao_tributaria = $pis_situacao_tributaria;
        $this->cofins_situacao_tributaria = $cofins_situacao_tributaria;
    }

    public function toArray()
    {
        $toReturn = [
            'numero_item' => $this->numero_item,
            'codigo_produto' => $this->codigo_produto,
            'descricao' => $this->descricao,
            'cfop' => $this->cfop,
            'cest' => $this->cest,
            'quantidade_comercial' => $this->quantidade_comercial,
            'quantidade_tributavel' => $this->quantidade_tributavel,
            'valor_unitario_comercial' => number_format($this->valor_unitario_comercial, 2, '.', ''),
            'valor_unitario_tributavel' => number_format($this->valor_unitario_tributavel, 2, '.', ''),
            'unidade_comercial' => $this->unidade_comercial,
            'unidade_tributavel' => $this->unidade_tributavel,
            'valor_frete' => number_format($this->valor_frete, 2, '.', ''),
            'valor_bruto' => number_format($this->valor_bruto, 2, '.', ''),
            'valor_desconto' => number_format($this->valor_desconto, 2, '.', ''),
            'codigo_ncm' => $this->codigo_ncm,
            'inclui_no_total' => $this->inclui_no_total,
            'icms_origem' => $this->icms_origem,
            'icms_situacao_tributaria' => $this->icms_situacao_tributaria,
            // 'pis_situacao_tributaria' => $this->pis_situacao_tributaria,
            // 'cofins_situacao_tributaria' => $this->cofins_situacao_tributaria,
            // 'icms_modalidade_base_calculo' => $this->icms_modalidade_base_calculo
        ];

        //limpa null do array
        $toReturn = array_filter($toReturn, function ($value) {
            return $value !== null;
        });

        return $toReturn;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}