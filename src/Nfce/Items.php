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



    public function __construct(
        ?string $numero_item = null,
        ?string $codigo_produto = null,
        ?string $descricao = null,
        ?string $cfop = null,
        ?string $quantidade_comercial = null,
        ?string $quantidade_tributavel = null,
        ?string $valor_unitario_comercial = null,
        ?string $valor_unitario_tributavel = null,
        ?string $unidade_comercial = null,
        ?string $unidade_tributavel = null,
        ?string $valor_frete = null,
        ?string $valor_bruto = null,
        ?string $valor_desconto = null,
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
        $this->quantidade_comercial = $quantidade_comercial;
        $this->quantidade_tributavel = $quantidade_tributavel;
        $this->valor_unitario_comercial = $valor_unitario_comercial;
        $this->valor_unitario_tributavel = $valor_unitario_tributavel;
        $this->unidade_comercial = $unidade_comercial;
        $this->unidade_tributavel = $unidade_tributavel;
        $this->valor_frete = $valor_frete;
        $this->valor_bruto = $valor_bruto;
        $this->valor_desconto = $valor_desconto;
        $this->codigo_ncm = $codigo_ncm;
        $this->inclui_no_total = $inclui_no_total;
        $this->icms_origem = $icms_origem;
        $this->icms_situacao_tributaria = $icms_situacao_tributaria;
        $this->pis_situacao_tributaria = $pis_situacao_tributaria;
        $this->cofins_situacao_tributaria = $cofins_situacao_tributaria;
    }

    public function toArray()
    {
        return [
            'numero_item' => $this->numero_item,
            'codigo_produto' => $this->codigo_produto,
            'descricao' => $this->descricao,
            'cfop' => $this->cfop,
            'quantidade_comercial' => $this->quantidade_comercial,
            'quantidade_tributavel' => $this->quantidade_tributavel,
            'valor_unitario_comercial' => $this->valor_unitario_comercial,
            'valor_unitario_tributavel' => $this->valor_unitario_tributavel,
            'unidade_comercial' => $this->unidade_comercial,
            'unidade_tributavel' => $this->unidade_tributavel,
            'valor_frete' => $this->valor_frete,
            'valor_bruto' => $this->valor_bruto,
            'valor_desconto' => $this->valor_desconto,
            'codigo_ncm' => $this->codigo_ncm,
            'inclui_no_total' => $this->inclui_no_total,
            'icms_origem' => $this->icms_origem,
            'icms_situacao_tributaria' => $this->icms_situacao_tributaria,
            'pis_situacao_tributaria' => $this->pis_situacao_tributaria,
            'cofins_situacao_tributaria' => $this->cofins_situacao_tributaria,
        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}