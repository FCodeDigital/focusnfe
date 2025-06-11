<?php

namespace FCodeDigital\FocusNfe\Nfe;

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
    public ?string $valor_total_tributos = null; // Adicionado para total de tributos
    public ?string $valor_desconto;
    public ?string $codigo_ncm;
    public ?string $inclui_no_total;
    public ?string $icms_origem;
    public ?string $icms_situacao_tributaria;
    public ?string $pis_situacao_tributaria;
    public ?string $cofins_situacao_tributaria;
    public int $icms_modalidade_base_calculo = 3;
    public ?string $codigo_barras_comercial;
    public ?string $codigo_barras_tributavel;

    //Impostos
    public ?float $icms_base_calculo;
    public ?float $icms_aliquota;
    public ?float $icms_valor;
    public ?string $ipi_situacao_tributaria;
    public ?string $ipi_codigo_enquadramento_legal;
    public ?float $ipi_base_calculo;
    public ?float $ipi_aliquota;
    public ?float $ipi_valor;
    public ?float $pis_base_calculo;
    public ?float $pis_aliquota_porcentual;
    public ?float $pis_valor;
    public ?float $cofins_base_calculo;
    public ?float $cofins_aliquota_porcentual;
    public ?float $cofins_valor;


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
        ?string $cofins_situacao_tributaria = null,
        ?string $codigo_barras_comercial = 'SEM GTIN',
        ?string $codigo_barras_tributavel = 'SEM GTIN',
        ?float $valor_total_tributos = null,
        ?float $icms_base_calculo = null,
        ?float $icms_aliquota = null,
        ?float $icms_valor = null,
        ?string $ipi_situacao_tributaria = null,
        ?string $ipi_codigo_enquadramento_legal = null,
        ?float $ipi_base_calculo = null,
        ?float $ipi_aliquota = null,
        ?float $ipi_valor = null,
        ?float $pis_base_calculo = null,
        ?float $pis_aliquota_porcentual = null,
        ?float $pis_valor = null,
        ?float $cofins_base_calculo = null,
        ?float $cofins_aliquota_porcentual = null,
        ?float $cofins_valor = null
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
        $this->codigo_barras_comercial = $codigo_barras_comercial;
        $this->codigo_barras_tributavel = $codigo_barras_tributavel;
        $this->valor_total_tributos = $valor_total_tributos !== null ? str_replace(' ', '', str_replace(',', '.', $valor_total_tributos)) : null;

        $this->icms_base_calculo = $icms_base_calculo !== null ? str_replace(' ', '', str_replace(',', '.', $icms_base_calculo)) : null;
        $this->icms_aliquota = $icms_aliquota !== null ? str_replace(' ', '', str_replace(',', '.', $icms_aliquota)) : null;
        $this->icms_valor = $icms_valor !== null ? str_replace(' ', '', str_replace(',', '.', $icms_valor)) : null;

        $this->ipi_situacao_tributaria = $ipi_situacao_tributaria !== null ? $ipi_situacao_tributaria : null;
        $this->ipi_codigo_enquadramento_legal = $ipi_codigo_enquadramento_legal !== null ? $ipi_codigo_enquadramento_legal : null;
        $this->ipi_base_calculo = $ipi_base_calculo !== null ? str_replace(' ', '', str_replace(',', '.', $ipi_base_calculo)) : null;
        $this->ipi_aliquota = $ipi_aliquota !== null ? str_replace(' ', '', str_replace(',', '.', $ipi_aliquota)) : null;
        $this->ipi_valor = $ipi_valor !== null ? str_replace(' ', '', str_replace(',', '.', $ipi_valor)) : null;

        $this->pis_base_calculo = $pis_base_calculo !== null ? str_replace(' ', '', str_replace(',', '.', $pis_base_calculo)) : null;
        $this->pis_aliquota_porcentual = $pis_aliquota_porcentual !== null ? str_replace(' ', '', str_replace(',', '.', $pis_aliquota_porcentual)) : null;
        $this->pis_valor = $pis_valor !== null ? str_replace(' ', '', str_replace(',', '.', $pis_valor)) : null;

        $this->cofins_base_calculo = $cofins_base_calculo !== null ? str_replace(' ', '', str_replace(',', '.', $cofins_base_calculo)) : null;
        $this->cofins_aliquota_porcentual = $cofins_aliquota_porcentual !== null ? str_replace(' ', '', str_replace(',', '.', $cofins_aliquota_porcentual)) : null;
        $this->cofins_valor = $cofins_valor !== null ? str_replace(' ', '', str_replace(',', '.', $cofins_valor)) : null;

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
            'pis_situacao_tributaria' => $this->pis_situacao_tributaria,
            'cofins_situacao_tributaria' => $this->cofins_situacao_tributaria,
            'icms_modalidade_base_calculo' => $this->icms_modalidade_base_calculo,
            'codigo_barras_comercial' => $this->codigo_barras_comercial,
            'codigo_barras_tributavel' => $this->codigo_barras_tributavel,
        ];

        // Adiciona o valor total de tributos se estiver definido
        if ($this->valor_total_tributos !== null) {
            $toReturn['valor_total_tributos'] = number_format($this->valor_total_tributos, 2, '.', '');
        }

        // icms_base_calculo
        if($this->icms_base_calculo !== null) {
            $toReturn['icms_base_calculo'] = number_format($this->icms_base_calculo, 2, '.', '');
        }
        // icms_aliquota
        if($this->icms_aliquota !== null) {
            $toReturn['icms_aliquota'] = number_format($this->icms_aliquota, 2, '.', '');
        }
        // icms_valor
        if($this->icms_valor !== null) {
            $toReturn['icms_valor'] = number_format($this->icms_valor, 2, '.', '');
        }
        // ipi_situacao_tributaria
        if($this->ipi_situacao_tributaria !== null) {
            $toReturn['ipi_situacao_tributaria'] = $this->ipi_situacao_tributaria;
        }
        // ipi_codigo_enquadramento_legal
        if($this->ipi_codigo_enquadramento_legal !== null) {
            $toReturn['ipi_codigo_enquadramento_legal'] = $this->ipi_codigo_enquadramento_legal;
        }
        // ipi_base_calculo
        if($this->ipi_base_calculo !== null) {
            $toReturn['ipi_base_calculo'] = number_format($this->ipi_base_calculo, 2, '.', '');
        }
        // ipi_aliquota
        if($this->ipi_aliquota !== null) {
            $toReturn['ipi_aliquota'] = number_format($this->ipi_aliquota, 2, '.', '');
        }
        // ipi_valor
        if($this->ipi_valor !== null) {
            $toReturn['ipi_valor'] = number_format($this->ipi_valor, 2, '.', '');
        }
        // pis_base_calculo
        if($this->pis_base_calculo !== null) {
            $toReturn['pis_base_calculo'] = number_format($this->pis_base_calculo, 2, '.', '');
        }
        // pis_aliquota_porcentual
        if($this->pis_aliquota_porcentual !== null) {
            $toReturn['pis_aliquota_porcentual'] = number_format($this->pis_aliquota_porcentual, 2, '.', '');
        }
        // pis_valor
        if($this->pis_valor !== null) {
            $toReturn['pis_valor'] = number_format($this->pis_valor, 2, '.', '');
        }
        // cofins_base_calculo
        if($this->cofins_base_calculo !== null) {
            $toReturn['cofins_base_calculo'] = number_format($this->cofins_base_calculo, 2, '.', '');
        }
        // cofins_aliquota_porcentual
        if($this->cofins_aliquota_porcentual !== null) {
            $toReturn['cofins_aliquota_porcentual'] = number_format($this->cofins_aliquota_porcentual, 2, '.', '');
        }
        // cofins_valor
        if($this->cofins_valor !== null) {
            $toReturn['cofins_valor'] = number_format($this->cofins_valor, 2, '.', '');
        }

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