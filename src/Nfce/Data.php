<?php

namespace FCodeDigital\FocusNfe\Nfe;

class Data
{
    // "natureza_operacao" => NULL,
    // "data_emissao" => date('Y-m-dTh:m:s'),
    // "data_entrada_saida" => NULL,
    // "tipo_documento" => NULL,
    // "finalidade_emissao" => NULL,
    // "cnpj_emitente" => NULL,
    // "nome_emitente" => NULL,
    // "nome_fantasia_emitente" => NULL,
    // "logradouro_emitente" => NULL,
    // "numero_emitente" => NULL,
    // "bairro_emitente" => NULL,
    // "municipio_emitente" => NULL,
    // "uf_emitente" => NULL,
    // "cep_emitente" => NULL,
    // "inscricao_estadual_emitente" => NULL,
    // "nome_destinatario" => NULL,
    // "cpf_destinatario" => NULL,
    // "telefone_destinatario" => NULL,
    // "logradouro_destinatario" => NULL,
    // "numero_destinatario" => NULL,
    // "bairro_destinatario" => NULL,
    // "municipio_destinatario" => NULL,
    // "uf_destinatario" => NULL,
    // "pais_destinatario" => NULL,
    // "cep_destinatario" => NULL,
    // "valor_frete" => NULL,
    // "valor_seguro" => NULL,
    // "valor_total" => NULL,
    // "valor_produtos" => NULL,
    // "modalidade_frete" => NULL,
    // "items" => array(
    //     array(
    //         "numero_item" => "1",
    //         "codigo_produto" => "1232",
    //         "descricao" => "Cartu00f5es de Visita",
    //         "cfop" => "6923",
    //         "unidade_comercial" => "un",
    //         "quantidade_comercial" => "100",
    //         "valor_unitario_comercial" => "0.4723",
    //         "valor_unitario_tributavel" => "0.4723",
    //         "unidade_tributavel" => "un",
    //         "codigo_ncm" => "49111090",
    //         "quantidade_tributavel" => "100",
    //         "valor_bruto" => "47.23",
    //         "icms_situacao_tributaria" => "400",
    //         "icms_origem" => "0",
    //         "pis_situacao_tributaria" => "07",
    //         "cofins_situacao_tributaria" => "07"
    //     )
    // ),

    public ?string $naturezaOperacao;
    public ?string $dataEmissao;
    public ?string $dataEntradaSaida;
    public ?string $tipoDocumento;
    public ?string $finalidadeEmissao;
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
    public ?string $valorFrete;
    public ?string $valorSeguro;
    public ?string $valorTotal;
    public ?string $valorProdutos;
    public ?string $modalidadeFrete;
    public array $items;

    public function __construct(
        ?string $naturezaOperacao,
        ?string $dataEmissao,
        ?string $dataEntradaSaida = null,
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
        ?string $valorProdutos = null,
        ?string $modalidadeFrete = null
    ) {

        //Validação de tipo de documento

        if(!($tipoDocumento >= 0 && $tipoDocumento <= 1)) {
            throw new \InvalidArgumentException('Tipo de documento inválido. Deve ser 0 ou 1');
        }

        //validação de local

        $this->naturezaOperacao = $naturezaOperacao;
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
        $this->valorProdutos = $valorProdutos;
        $this->modalidadeFrete = $modalidadeFrete;
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
            'valor_produtos' => $this->valorProdutos,
            'modalidade_frete' => $this->modalidadeFrete,
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