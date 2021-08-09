<?php

namespace FCodeDigital\FocusNfe;

class Nfe extends FocusNfe
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
    public function enviar(string $reference, \FCodeDigital\FocusNfe\Nfe\Data $params)
    {
        return $this->callPost("/v2/nfe?ref=" . $reference, $params->toArray());
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

        return $this->callGet("/v2/nfe/" . $reference, $params);
    }

    public function cancelar(string $reference, string $justificativa)
    {
        //string deve conter entre 15 e 255 caracteres
        if(strlen($justificativa) < 15 || strlen($justificativa) > 255) {
            throw new \Exception("Justificativa deve ter entre 15 e 255 caracteres");
        }

        return $this->callDelete("/v2/nfe/" . $reference, [
            'justificativa' => $justificativa
        ]);
    }

    public function reenviarEmail(string $reference, array $emails)
    {
        $email = array (
            "emails" => $emails
        );

        return $this->callPost("/v2/nfe/" . $reference . "/email", $email);
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