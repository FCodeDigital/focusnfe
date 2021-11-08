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
    public ?string $valor_troco = null;

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
    public ?string $inscricaoEstadualDestinatario = null;



    public ?string $valorFrete;
    public ?string $valorSeguro;
    public ?string $valorDesconto;
    public ?string $valorTotal;
    public ?string $valorProdutos;
    public ?string $modalidadeFrete;
    public array $items;

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
        ?string $indicadorInscricaoEstadualDestinatario = null,
        ?string $inscricaoEstadualDestinatario = null
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
        $this->inscricaoEstadualDestinatario = $inscricaoEstadualDestinatario;
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

    public function setTroco(
        ?string $valor_troco = null
    )
    {
        $this->valor_troco = $valor_troco;
    }

    public function setDados(
        ?string $naturezaOperacao,
        ?string $dataEmissao, //"2021-04-07T14:46:01-03:00"
        ?string $dataEntradaSaida = null, //"2021-04-07T14:46:01-03:00"
        ?string $tipoDocumento,
        ?string $finalidadeEmissao = null,
        ?string $valorFrete = null,
        ?string $valorSeguro = null,
        ?string $valorTotal = null,
        ?string $valorDesconto = null,
        ?string $valorProdutos = null,
        ?string $modalidadeFrete = null,
        ?string $localDestino = null,
        ?string $consumidorFinal = null,
        ?string $presencaComprador = null
    )
    {
        $this->naturezaOperacao = $naturezaOperacao;
        $this->dataEmissao = $dataEmissao;
        $this->dataEntradaSaida = $dataEntradaSaida;
        $this->tipoDocumento = $tipoDocumento;
        $this->finalidadeEmissao = $finalidadeEmissao;
        $this->valorFrete = $valorFrete;
        $this->valorSeguro = $valorSeguro;
        $this->valorTotal = $valorTotal;
        $this->valorDesconto = $valorDesconto;
        $this->valorProdutos = $valorProdutos;
        $this->modalidadeFrete = $modalidadeFrete;
        $this->localDestino = $localDestino;
        $this->consumidorFinal = $consumidorFinal;
        $this->presencaComprador = $presencaComprador;
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

    public function addFormaPagamento(\FCodeDigital\FocusNfe\Nfe\FormaPagamento $forma_pagamento)
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
        $data = [];
        if(isset($this->naturezaOperacao) && $this->naturezaOperacao){
            $data['natureza_operacao'] = $this->naturezaOperacao;
        }

        if(isset($this->dataEmissao) && $this->dataEmissao){
            $data['data_emissao'] = $this->dataEmissao;
        }

        if(isset($this->dataEntradaSaida) && $this->dataEntradaSaida){
            $data['data_entrada_saida'] = $this->dataEntradaSaida;
        }

        if(isset($this->tipoDocumento) && $this->tipoDocumento){
            $data['tipo_documento'] = $this->tipoDocumento;
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

        if(isset($this->valorFrete) && $this->valorFrete){
            $data['valor_frete'] = str_replace(' ', '', str_replace(',', '.', $this->valorFrete));
        }

        if(isset($this->valorSeguro) && $this->valorSeguro){
            $data['valor_seguro'] = str_replace(' ', '', str_replace(',', '.', $this->valorSeguro));
        }

        if(isset($this->valorTotal) && $this->valorTotal){
            $data['valor_total'] = str_replace(' ', '', str_replace(',', '.', $this->valorTotal));
        }

        if(isset($this->valorDesconto) && $this->valorDesconto){
            $data['valor_desconto'] = str_replace(' ', '', str_replace(',', '.', $this->valorDesconto));
        }

        if(isset($this->valorProdutos) && $this->valorProdutos){
            $data['valor_produtos'] = str_replace(' ', '', str_replace(',', '.', $this->valorProdutos));
        }

        if(isset($this->modalidadeFrete)){
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

        if(isset($this->inscricaoEstadualDestinatario) && $this->inscricaoEstadualDestinatario){
            $data['inscricao_estadual_destinatario'] = $this->inscricaoEstadualDestinatario;
        }

        if(isset($this->indicadorInscricaoEstadualDestinaterio) && $this->indicadorInscricaoEstadualDestinaterio){
            $data['indicador_inscricao_estadual_destinatario'] = $this->indicadorInscricaoEstadualDestinaterio;
        }

        if(isset($this->valor_troco) && $this->valor_troco){
            $data['valor_troco'] = number_format($this->valor_troco, 2, '.', '');
        }

        //limpa null do array
        $data = array_filter($data, function ($value) {
            return $value !== null;
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