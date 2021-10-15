<?php

namespace FCodeDigital\FocusNfe\Nfce;

class Data
{
    public ?string $naturezaOperacao;
    public ?string $dataEmissao;

    public ?string $localDestino;
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
    public ?string $nomeDestinatario = null;
    public ?string $cpfDestinatario = null;
    public ?string $cnpjDestinatario = null;
    public ?string $telefoneDestinatario = null;
    public ?string $logradouroDestinatario = null;
    public ?string $numeroDestinatario = null;
    public ?string $bairroDestinatario = null;
    public ?string $municipioDestinatario = null;
    public ?string $ufDestinatario = null;
    public ?string $paisDestinatario = null;
    public ?string $cepDestinatario = null;
    public ?string $indicadorInscricaoEstadualDestinatario = null;

    public ?string $modalidadeFrete = '9';
    public array $items = [];
    public array $formas_pagamento = [];

    public function __construct(

    ) {

    }

    public function setDestinatario(
        ?string $nomeDestinatario = null,
        ?string $cpfDestinatario = null,
        ?string $cnpjDestinatario = null,
        ?string $telefoneDestinatario = null,
        ?string $logradouroDestinatario = null,
        ?string $numeroDestinatario = null,
        ?string $bairroDestinatario = null,
        ?string $municipioDestinatario = null,
        ?string $ufDestinatario = null,
        ?string $paisDestinatario = null,
        ?string $cepDestinatario = null,
        ?string $indicadorInscricaoEstadualDestinatario = null
    )
    {
        $this->nomeDestinatario = $nomeDestinatario;
        $this->cpfDestinatario = $cpfDestinatario;
        $this->cnpjDestinatario = $cnpjDestinatario;
        $this->telefoneDestinatario = $telefoneDestinatario;
        $this->logradouroDestinatario = $logradouroDestinatario;
        $this->numeroDestinatario = $numeroDestinatario;
        $this->bairroDestinatario = $bairroDestinatario;
        $this->municipioDestinatario = $municipioDestinatario;
        $this->ufDestinatario = $ufDestinatario;
        $this->paisDestinatario = $paisDestinatario;
        $this->cepDestinatario = $cepDestinatario;
        $this->indicadorInscricaoEstadualDestinatario = $indicadorInscricaoEstadualDestinatario;
    }

    public function setEmitente(
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
        ?string $regimeTributarioEmitente = null
    )
    {
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
        $this->regimeTributarioEmitente = $regimeTributarioEmitente;
    }

    public function setDados(
        ?string $naturezaOperacao,
        ?string $dataEmissao, //"2021-04-07T14:46:01-03:00"
        ?string $modalidadeFrete = null,
        ?string $localDestino = null,
        ?string $presencaComprador = null
    )
    {
        $this->naturezaOperacao = $naturezaOperacao;
        $this->dataEmissao = $dataEmissao;
        $this->modalidadeFrete = $modalidadeFrete;
        $this->localDestino = $localDestino;
        $this->presencaComprador = $presencaComprador;
    }

    //set items
    public function addItem(\FCodeDigital\FocusNfe\Nfce\Items $item)
    {
        $this->items[] = $item;
    }

    //get items
    public function getItems()
    {
        return $this->items;
    }

    //set items
    public function addFormaPagamento(\FCodeDigital\FocusNfe\Nfce\FormaPagamento $forma_pagamento)
    {
        $this->forma_pagamento[] = $forma_pagamento;
    }

    //get items
    public function getFormaPagamento()
    {
        return $this->forma_pagamento;
    }

    //to array
    public function toArray()
    {
        // $data = [
        //     'natureza_operacao' => $this->naturezaOperacao,
        //     'data_emissao' => $this->dataEmissao,
        //     'finalidade_emissao' => $this->finalidadeEmissao,
        //     'cnpj_emitente' => $this->cnpjEmitente,
        //     'nome_emitente' => $this->nomeEmitente,
        //     'nome_fantasia_emitente' => $this->nomeFantasiaEmitente,
        //     'logradouro_emitente' => $this->logradouroEmitente,
        //     'numero_emitente' => $this->numeroEmitente,
        //     'bairro_emitente' => $this->bairroEmitente,
        //     'municipio_emitente' => $this->municipioEmitente,
        //     'uf_emitente' => $this->ufEmitente,
        //     'cep_emitente' => $this->cepEmitente,
        //     'inscricao_estadual_emitente' => $this->inscricaoEstadualEmitente,
        //     'nome_destinatario' => $this->nomeDestinatario,
        //     'cpf_destinatario' => $this->cpfDestinatario,
        //     'cnpj_destinatario' => $this->cnpjDestinatario,
        //     'telefone_destinatario' => $this->telefoneDestinatario,
        //     'logradouro_destinatario' => $this->logradouroDestinatario,
        //     'numero_destinatario' => $this->numeroDestinatario,
        //     'bairro_destinatario' => $this->bairroDestinatario,
        //     'municipio_destinatario' => $this->municipioDestinatario,
        //     'uf_destinatario' => $this->ufDestinatario,
        //     'pais_destinatario' => $this->paisDestinatario,
        //     'cep_destinatario' => $this->cepDestinatario,
        //     'modalidade_frete' => $this->modalidadeFrete,
        //     'local_destino' => $this->localDestino,
        //     'consumidor_final' => $this->consumidorFinal,
        //     'regime_tributario_emitente' => $this->regimeTributarioEmitente,
        //     'presenca_comprador' => $this->presencaComprador,
        //     'indicador_inscricao_estadual_destinatario' => $this->indicadorInscricaoEstadualDestinatario,
        // ];

        $data = [];
        if(isset($this->naturezaOperacao) && $this->naturezaOperacao){
            $data['natureza_operacao'] = $this->naturezaOperacao;
        }

        if(isset($this->dataEmissao) && $this->dataEmissao){
            $data['data_emissao'] = $this->dataEmissao;
        }

        if(isset($this->finalidadeEmissao) && $this->finalidadeEmissao){
            $data['finalidade_emissao'] = $this->finalidadeEmissao;
        }

        if(isset($this->cnpjEmitente) && $this->cnpjEmitente){
            $data['cnpj_emitente'] = $this->cnpjEmitente;
        }

        if(isset($this->nomeEmitente) && $this->nomeEmitente){
            $data['nome_emitente'] = $this->nomeEmitente;
        }

        if(isset($this->nomeFantasiaEmitente) && $this->nomeFantasiaEmitente){
            $data['nome_fantasia_emitente'] = $this->nomeFantasiaEmitente;
        }

        if(isset($this->logradouroEmitente) && $this->logradouroEmitente){
            $data['logradouro_emitente'] = $this->logradouroEmitente;
        }

        if(isset($this->numeroEmitente) && $this->numeroEmitente){
            $data['numero_emitente'] = $this->numeroEmitente;
        }

        if(isset($this->bairroEmitente) && $this->bairroEmitente){
            $data['bairro_emitente'] = $this->bairroEmitente;
        }

        if(isset($this->municipioEmitente) && $this->municipioEmitente){
            $data['municipio_emitente'] = $this->municipioEmitente;
        }

        if(isset($this->ufEmitente) && $this->ufEmitente){
            $data['uf_emitente'] = $this->ufEmitente;
        }

        if(isset($this->cepEmitente) && $this->cepEmitente){
            $data['cep_emitente'] = $this->cepEmitente;
        }

        if(isset($this->inscricaoEstadualEmitente) && $this->inscricaoEstadualEmitente){
            $data['inscricao_estadual_emitente'] = $this->inscricaoEstadualEmitente;
        }

        if(isset($this->nomeDestinatario) && $this->nomeDestinatario){
            $data['nome_destinatario'] = $this->nomeDestinatario;
        }

        if(isset($this->cpfDestinatario) && $this->cpfDestinatario){
            $data['cpf_destinatario'] = $this->cpfDestinatario;
        }else{
            $data['cpf_destinatario'] = '';
        }

        if(isset($this->cnpjDestinatario) && $this->cnpjDestinatario){
            $data['cnpj_destinatario'] = $this->cnpjDestinatario;
        }else{
            $data['cnpj_destinatario'] = '';
        }

        if(isset($this->telefoneDestinatario) && $this->telefoneDestinatario){
            $data['telefone_destinatario'] = $this->telefoneDestinatario;
        }

        if(isset($this->logradouroDestinatario) && $this->logradouroDestinatario){
            $data['logradouro_destinatario'] = $this->logradouroDestinatario;
        }

        if(isset($this->numeroDestinatario) && $this->numeroDestinatario){
            $data['numero_destinatario'] = $this->numeroDestinatario;
        }

        if(isset($this->bairroDestinatario) && $this->bairroDestinatario){
            $data['bairro_destinatario'] = $this->bairroDestinatario;
        }

        if(isset($this->municipioDestinatario) && $this->municipioDestinatario){
            $data['municipio_destinatario'] = $this->municipioDestinatario;
        }

        if(isset($this->ufDestinatario) && $this->ufDestinatario){
            $data['uf_destinatario'] = $this->ufDestinatario;
        }

        if(isset($this->paisDestinatario) && $this->paisDestinatario){
            $data['pais_destinatario'] = $this->paisDestinatario;
        }

        if(isset($this->cepDestinatario) && $this->cepDestinatario){
            $data['cep_destinatario'] = $this->cepDestinatario;
        }

        if(isset($this->modalidadeFrete) && $this->modalidadeFrete){
            $data['modalidade_frete'] = $this->modalidadeFrete;
        }

        if(isset($this->localDestino) && $this->localDestino){
            $data['local_destino'] = $this->localDestino;
        }

        if(isset($this->consumidorFinal) && $this->consumidorFinal){
            $data['consumidor_final'] = $this->consumidorFinal;
        }

        if(isset($this->regimeTributarioEmitente) && $this->regimeTributarioEmitente){
            $data['regime_tributario_emitente'] = $this->regimeTributarioEmitente;
        }

        if(isset($this->presencaComprador) && $this->presencaComprador){
            $data['presenca_comprador'] = $this->presencaComprador;
        }

        if(isset($this->indicadorInscricaoEstadualDestinatario) && $this->indicadorInscricaoEstadualDestinatario){
            $data['indicador_inscricao_estadual_destinatario'] = $this->indicadorInscricaoEstadualDestinatario;
        }

        //limpa null do array
        $data = array_filter($data, function ($value) {
            return ($value !== null && $value !== false);
        });

        $data['items'] = [];
        if($this->items) {
            foreach ($this->items as $item) {
                $data['items'][] = $item->toArray();
            }
        }

        $data['formas_pagamento'] = [];
        if($this->forma_pagamento) {
            foreach ($this->forma_pagamento as $formapag) {
                $data['formas_pagamento'][] = $formapag->toArray();
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