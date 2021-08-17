<?php

namespace FCodeDigital\FocusNfe\Nfe;

class Data
{
    public ?string $formaPagamento;

    public ?string $naturezaOperacao;
    public ?string $dataEmissao;
    public ?string $dataEntradaSaida;
    public ?string $tipoDocumento;
    public ?string $finalidadeEmissao;

    public ?string $localDestino;
    public ?string $consumidorFinal;
    public ?string $presencaComprador;

    //Emitente
    public ?string $cnpjEmitente;
    public ?string $nomeEmitente;
    public ?string $nomeFantasiaEmitente;
    public ?string $logradouroEmitente;
    public ?string $numeroEmitente;
    public ?string $bairroEmitente;
    public ?string $municipioEmitente;
    public ?string $ufEmitente;
    public ?string $cepEmitente;
    public ?string $inscricaoEstadualEmitente;
    public ?string $regimeTributarioEmitente;

    //Destinatario
    public ?string $nomeDestinatario;
    public ?string $cpfDestinatario;
    public ?string $telefoneDestinatario;
    public ?string $logradouroDestinatario;
    public ?string $numeroDestinatario;
    public ?string $bairroDestinatario;
    public ?string $municipioDestinatario;
    public ?string $ufDestinatario;
    public ?string $paisDestinatario;
    public ?string $cepDestinatario;
    public ?string $inscricaoEstadualDestinatario;
    public ?string $indicadorInscricaoEstadualDestinatario;



    public ?string $valorFrete;
    public ?string $valorSeguro;
    public ?string $valorDesconto;
    public ?string $valorTotal;
    public ?string $valorProdutos;
    public ?string $modalidadeFrete;
    public array $items;

    public function __construct(
        ?string $naturezaOperacao,
        ?string $formaPagamento,
        ?string $dataEmissao, //"2021-04-07T14:46:01-03:00"
        ?string $dataEntradaSaida = null, //"2021-04-07T14:46:01-03:00"
        ?string $tipoDocumento,
        ?string $finalidadeEmissao = null,
        ?string $cnpjEmitente = null,
        ?string $nomeEmitente = null,
        ?string $nomeFantasiaEmitente = null,
        ?string $logradouroEmitente = null,
        ?string $numeroEmitente = null,
        ?string $bairroEmitente = null,
        ?string $municipioEmitente = null,
        ?string $ufEmitente = null,
        ?string $cepEmitente = null,
        ?string $inscricaoEstadualEmitente = null,
        ?string $nomeDestinatario = null,
        ?string $cpfDestinatario = null,
        ?string $telefoneDestinatario = null,
        ?string $logradouroDestinatario = null,
        ?string $numeroDestinatario = null,
        ?string $bairroDestinatario = null,
        ?string $municipioDestinatario = null,
        ?string $ufDestinatario = null,
        ?string $paisDestinatario = null,
        ?string $cepDestinatario = null,
        ?string $valorFrete = null,
        ?string $valorSeguro = null,
        ?string $valorTotal = null,
        ?string $valorDesconto = null,
        ?string $valorProdutos = null,
        ?string $modalidadeFrete = null,
        ?string $localDestino = null,
        ?string $consumidorFinal = null,
        ?string $presencaComprador = null,
        ?string $regimeTributarioEmitente = null,
        ?string $inscricaoEstadualDestinatario = null,
        ?string $indicadorInscricaoEstadualDestinatario = null
    ) {

        //Validação de tipo de documento

        if(!($tipoDocumento >= 0 && $tipoDocumento <= 1)) {
            throw new \InvalidArgumentException('Tipo de documento inválido. Deve ser 0 ou 1');
        }

        //validação de local

        $this->naturezaOperacao = $naturezaOperacao;
        $this->formaPagamento = $formaPagamento;
        $this->dataEmissao = $dataEmissao;
        $this->dataEntradaSaida = $dataEntradaSaida;
        $this->tipoDocumento = $tipoDocumento;
        $this->finalidadeEmissao = $finalidadeEmissao;
        $this->cnpjEmitente = $cnpjEmitente;
        $this->nomeEmitente = $nomeEmitente;
        $this->nomeFantasiaEmitente = $nomeFantasiaEmitente;
        $this->logradouroEmitente = $logradouroEmitente;
        $this->numeroEmitente = $numeroEmitente;
        $this->bairroEmitente = $bairroEmitente;
        $this->municipioEmitente = $municipioEmitente;
        $this->ufEmitente = $ufEmitente;
        $this->cepEmitente = $cepEmitente;
        $this->inscricaoEstadualEmitente = $inscricaoEstadualEmitente;
        $this->nomeDestinatario = $nomeDestinatario;
        $this->cpfDestinatario = $cpfDestinatario;
        $this->telefoneDestinatario = $telefoneDestinatario;
        $this->logradouroDestinatario = $logradouroDestinatario;
        $this->numeroDestinatario = $numeroDestinatario;
        $this->bairroDestinatario = $bairroDestinatario;
        $this->municipioDestinatario = $municipioDestinatario;
        $this->ufDestinatario = $ufDestinatario;
        $this->paisDestinatario = $paisDestinatario;
        $this->cepDestinatario = $cepDestinatario;
        $this->valorFrete = $valorFrete;
        $this->valorSeguro = $valorSeguro;
        $this->valorTotal = $valorTotal;
        $this->valorDesconto = $valorDesconto;
        $this->valorProdutos = $valorProdutos;
        $this->modalidadeFrete = $modalidadeFrete;
        $this->localDestino = $localDestino;
        $this->consumidorFinal = $consumidorFinal;
        $this->regimeTributarioEmitente = $regimeTributarioEmitente;
        $this->presencaComprador = $presencaComprador;
        $this->inscricaoEstadualDestinatario = $inscricaoEstadualDestinatario;
        $this->indicadorInscricaoEstadualDestinatario = $indicadorInscricaoEstadualDestinatario;

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
            'forma_pagamento' => $this->formaPagamento,
            'natureza_operacao' => $this->naturezaOperacao,
            'data_emissao' => $this->dataEmissao,
            'data_entrada_saida' => $this->dataEntradaSaida,
            'tipo_documento' => $this->tipoDocumento,
            'finalidade_emissao' => $this->finalidadeEmissao,
            'cnpj_emitente' => $this->cnpjEmitente,
            'nome_emitente' => $this->nomeEmitente,
            'nome_fantasia_emitente' => $this->nomeFantasiaEmitente,
            'logradouro_emitente' => $this->logradouroEmitente,
            'numero_emitente' => $this->numeroEmitente,
            'bairro_emitente' => $this->bairroEmitente,
            'municipio_emitente' => $this->municipioEmitente,
            'uf_emitente' => $this->ufEmitente,
            'cep_emitente' => $this->cepEmitente,
            'inscricao_estadual_emitente' => $this->inscricaoEstadualEmitente,
            'nome_destinatario' => $this->nomeDestinatario,
            'cpf_destinatario' => $this->cpfDestinatario,
            'telefone_destinatario' => $this->telefoneDestinatario,
            'logradouro_destinatario' => $this->logradouroDestinatario,
            'numero_destinatario' => $this->numeroDestinatario,
            'bairro_destinatario' => $this->bairroDestinatario,
            'municipio_destinatario' => $this->municipioDestinatario,
            'uf_destinatario' => $this->ufDestinatario,
            'pais_destinatario' => $this->paisDestinatario,
            'cep_destinatario' => $this->cepDestinatario,
            'valor_frete' => $this->valorFrete,
            'valor_seguro' => $this->valorSeguro,
            'valor_total' => $this->valorTotal,
            'valor_desconto' => $this->valorDesconto,
            'valor_produtos' => $this->valorProdutos,
            'modalidade_frete' => $this->modalidadeFrete,
            'local_destino' => $this->localDestino,
            'consumidor_final' => $this->consumidorFinal,
            'regime_tributario_emitente' => $this->regimeTributarioEmitente,
            'presenca_comprador' => $this->presencaComprador,
            'inscricao_estadual_destinatario' => $this->inscricaoEstadualDestinatario,
            'indicador_inscricao_estadual_destinatario' => $this->indicadorInscricaoEstadualDestinatario,
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