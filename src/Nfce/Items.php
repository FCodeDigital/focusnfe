<?php

namespace FCodeDigital\FocusNfe\Nfce;

class Items
{
    // "cnpj_emitente" => "51916585000125",
    // "data_emissao" => "2017-12-07T12:40:10",
    // "indicador_inscricao_estadual_destinatario" => "9",
    // "modalidade_frete" => "9",
    // "local_destino" => "1",
    // "presenca_comprador" => "1",
    // "natureza_operacao" => "VENDA AO CONSUMIDOR",

    public string $cnpj_emitente;
    public string $data_emissao;
    public string $indicador_inscricao_estadual_destinatario;
    public string $modalidade_frete;
    public string $local_destino;
    public string $presenca_comprador;
    public string $natureza_operacao;



    public function __construct(
        string $cnpj_emitente = null,
        string $data_emissao = null,
        string $indicador_inscricao_estadual_destinatario = null,
        string $modalidade_frete = null,
        string $local_destino = null,
        string $presenca_comprador = null,
        string $natureza_operacao = null
    ) {
        $this->cnpj_emitente = $cnpj_emitente;
        $this->data_emissao = $data_emissao;
        $this->indicador_inscricao_estadual_destinatario = $indicador_inscricao_estadual_destinatario;
        $this->modalidade_frete = $modalidade_frete;
        $this->local_destino = $local_destino;
        $this->presenca_comprador = $presenca_comprador;
        $this->natureza_operacao = $natureza_operacao;

    }

    public function toArray()
    {
        return [
            'cnpj_emitente' => $this->cnpj_emitente,
            'data_emissao' => $this->data_emissao,
            'indicador_inscricao_estadual_destinatario' => $this->indicador_inscricao_estadual_destinatario,
            'modalidade_frete' => $this->modalidade_frete,
            'local_destino' => $this->local_destino,
            'presenca_comprador' => $this->presenca_comprador,
            'natureza_operacao' => $this->natureza_operacao,

        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}