<?php

namespace FCodeDigital\FocusNfe\Nfe;

class Items
{
    //"numero_item" => "1",
    //"codigo_produto" => "1232",
    //"descricao" => "Cartu00f5es de Visita",
    //"cfop" => "6923",
    //"unidade_comercial" => "un",
    //"quantidade_comercial" => "100",
    //"valor_unitario_comercial" => "0.4723",
    //"valor_unitario_tributavel" => "0.4723",
    //"unidade_tributavel" => "un",
    //"codigo_ncm" => "49111090",
    //"quantidade_tributavel" => "100",
    //"valor_bruto" => "47.23",
    //"icms_situacao_tributaria" => "400",
    //"icms_origem" => "0",
    //"pis_situacao_tributaria" => "07",
    //"cofins_situacao_tributaria" => "07"

    public string $numero_item;
    public string $codigo_produto;
    public string $descricao;
    public string $cfop;
    public string $unidade_comercial;
    public string $quantidade_comercial;
    public string $valor_unitario_comercial;
    public string $valor_unitario_tributavel;
    public string $unidade_tributavel;
    public string $codigo_ncm;
    public string $quantidade_tributavel;
    public string $valor_bruto;
    public string $icms_situacao_tributaria;
    public string $icms_origem;
    public string $pis_situacao_tributaria;
    public string $cofins_situacao_tributaria;



    public function __construct(
        string $numero_item,
        string $codigo_produto,
        string $descricao,
        string $cfop,
        string $unidade_comercial,
        string $quantidade_comercial,
        string $valor_unitario_comercial,
        string $valor_unitario_tributavel,
        string $unidade_tributavel,
        string $codigo_ncm,
        string $quantidade_tributavel,
        string $valor_bruto,
        string $icms_situacao_tributaria,
        string $icms_origem,
        string $pis_situacao_tributaria,
        string $cofins_situacao_tributaria
    ) {
        $this->numero_item = $numero_item;
        $this->codigo_produto = $codigo_produto;
        $this->descricao = $descricao;
        $this->cfop = $cfop;
        $this->unidade_comercial = $unidade_comercial;
        $this->quantidade_comercial = $quantidade_comercial;
        $this->valor_unitario_comercial = $valor_unitario_comercial;
        $this->valor_unitario_tributavel = $valor_unitario_tributavel;
        $this->unidade_tributavel = $unidade_tributavel;
        $this->codigo_ncm = $codigo_ncm;
        $this->quantidade_tributavel = $quantidade_tributavel;
        $this->valor_bruto = $valor_bruto;
        $this->icms_situacao_tributaria = $icms_situacao_tributaria;
        $this->icms_origem = $icms_origem;
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
            'unidade_comercial' => $this->unidade_comercial,
            'quantidade_comercial' => $this->quantidade_comercial,
            'valor_unitario_comercial' => $this->valor_unitario_comercial,
            'valor_unitario_tributavel' => $this->valor_unitario_tributavel,
            'unidade_tributavel' => $this->unidade_tributavel,
            'codigo_ncm' => $this->codigo_ncm,
            'quantidade_tributavel' => $this->quantidade_tributavel,
            'valor_bruto' => $this->valor_bruto,
            'icms_situacao_tributaria' => $this->icms_situacao_tributaria,
            'icms_origem' => $this->icms_origem,
            'pis_situacao_tributaria' => $this->pis_situacao_tributaria,
            'cofins_situacao_tributaria' => $this->cofins_situacao_tributaria,
        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}