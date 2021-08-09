<?php

namespace FCodeDigital\FocusNfe;

class Nfce extends FocusNfe
{

    public function __construct(
        string $environment = 'testing',
        string $login = "",
        string $password = ""
    ) {
        parent::__construct(
            $environment,
            $login,
            $password
        );
    }

    //enviarNfe
    public function enviar(string $reference, array $params = [])
    {
        $defaults = array (
            "cnpj_emitente" => "51916585000125",
            "data_emissao" => "2017-12-07T12:40:10",
            "indicador_inscricao_estadual_destinatario" => "9",
            "modalidade_frete" => "9",
            "local_destino" => "1",
            "presenca_comprador" => "1",
            "natureza_operacao" => "VENDA AO CONSUMIDOR",
            "itens" => array(
                array(
                    "numero_item" => "1",
                    "codigo_ncm" => "62044200",
                    "quantidade_comercial" => "1.00",
                    "quantidade_tributavel" => "1.00",
                    "cfop" => "5102",
                    "valor_unitario_tributavel" => "1.00",
                    "valor_unitario_comercial" => "1.00",
                    "valor_desconto" => "0.00",
                    "descricao" => "NOTA FISCAL EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL",
                    "codigo_produto" => "251887",
                    "icms_origem" => "0",
                    "icms_situacao_tributaria" => "102",
                    "unidade_comercial" => "un",
                    "unidade_tributavel" => "un",
                    "valor_total_tributos" => "1.00"
                )
            ),
            "formas_pagamento" => array(
                array(
                    "forma_pagamento" => "03",
                    "valor_pagamento" => "1.00",
                    "nome_credenciadora" => "Cielo",
                    "bandeira_operadora" => "02",
                    "numero_autorizacao" => "R07242"
                )
            ),
        );

        $params = array_merge($defaults, $params);

        return $this->callPost("/v2/nfce?ref=" . $reference, $params);
    }

    //consultarNfe
    public function consultar(string $reference, int $completa = NULL)
    {
        $params = [];
        if($completa !== NULL) {
            $params = array(
                'completa' => $completa
            );
        }

        return $this->callGet("/v2/nfce/" . $reference, $params);
    }

    public function cancelar(string $reference, string $justificativa)
    {
        //string deve conter entre 15 e 255 caracteres
        if(strlen($justificativa) < 15 || strlen($justificativa) > 255) {
            throw new \Exception("Justificativa deve ter entre 15 e 255 caracteres");
        }

        return $this->callDelete("/v2/nfce/" . $reference, [
            'justificativa' => $justificativa
        ]);
    }

    public function reenviarEmail(string $reference, array $emails)
    {
        $email = array (
            "emails" => $emails
        );

        return $this->callPost("/v2/nfce/" . $reference . "/email", $email);
    }

    public function inutilizaSequencia(
        string $cnpj,
        string $serie,
        string $numeroInicial,
        string $numeroFinal,
        string $justificativa
    )
    {
        //justificativa deve conter no minimo 15
        if(strlen($justificativa) < 15) {
            throw new \Exception("Justificativa deve ter no minimo 15 caracteres");
        }

        //valida cnpj
        if(!preg_match("/^[0-9]{14}$/", $cnpj)) {
            throw new \Exception("CNPJ inválido");
        }

        $params = [
            'cnpj' => $cnpj,
            'serie' => $serie,
            'numero_inicial' => $numeroInicial,
            'numero_final' => $numeroFinal,
            'justificativa' => $justificativa
        ];

        return $this->callPost("/v2/nfe/inutilizacao", $params);
    }





}