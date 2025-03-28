<?php

namespace FCodeDigital\FocusNfe;

class FocusNfe
{
    public $environment = 'testing';

    protected $server_endpoint_testing = "https://homologacao.focusnfe.com.br";
    protected $server_endpoint_production = "https://api.focusnfe.com.br";

    protected $login = ""; //"token obtido no cadastro da empresa";
    protected $password = "";


    public function __construct(
        string $environment = 'testing',
        string $login = "",
        string $password = ""
    ) {
        $this->environment = $environment;
        $this->login = $login;
        $this->password = $password;
    }

    protected function set($name, $value)
    {
            $this->$name = $value;
    }

    protected function get($name)
    {
        return $this->$name;
    }

    //set environment
    public function setEnvironment(string $environment)
    {
        $this->environment = $environment;
    }

    //get environment
    public function getEnvironment()
    {
        return $this->environment;
    }

    //set login
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    //get login
    public function getLogin()
    {
        return $this->login;
    }

    //set password
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    //get password
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Chamadas CURL
     */


    protected function callPost(string $url, array $params, bool $isJsonReturn = true)
    {
        // echo '<pre>';die(var_dump($url, json_encode($params)));
        $ch = curl_init();

        if($this->environment == 'testing'){
            curl_setopt($ch, CURLOPT_URL, $this->server_endpoint_testing. $url);
        }else{
            curl_setopt($ch, CURLOPT_URL, $this->server_endpoint_production . $url);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$this->login:$this->password");

        $body = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($http_code == 401 || $http_code == 403) {
            throw new \Exception("Acesso não autorizado! Verifique o token.", $http_code);
        }
        if ($http_code == 415) {
            throw new \Exception("JSON contém erro", $http_code);
        }
        if ($http_code == 429) {
            throw new \Exception("Você ultrapassou o limite de requisições por minuto.", $http_code);
        }
        if ($http_code == 500) {
            throw new \Exception("Ocorreu algum erro inesperado. Contate o suporte técnico.", $http_code);
        }

        return [$http_code, ($isJsonReturn ? json_decode($body) : $body)];
    }

    protected function callGet(string $url, array $params = [])
    {
        $ch = curl_init();

        $url_params = '';
        if(is_array($params) && count($params) > 0)
        {
            foreach ($params as $key => $value)
            {
                if($url_params != '')
                {
                    $url_params .= '&';
                }else {
                    $url_params .= '?';
                }

                $url_params .= $key . '=' . $value;
            }
        }

        if($this->environment == 'testing'){
            curl_setopt($ch, CURLOPT_URL, $this->server_endpoint_testing. $url . $url_params);
        }else{
            curl_setopt($ch, CURLOPT_URL, $this->server_endpoint_production . $url . $url_params);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array());
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$this->login:$this->password");

        $body = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($http_code == 401 || $http_code == 403) {
            throw new \Exception("Acesso não autorizado! Verifique o token.", $http_code);
        }
        if ($http_code == 415) {
            throw new \Exception("JSON contém erro", $http_code);
        }
        if ($http_code == 422) {
            throw new \Exception("Não existe erro na requisição (sintaxe), porém há algum erro de semântica (por exemplo, tentar cancelar uma nota já cancelada)", $http_code);
        }
        if ($http_code == 429) {
            throw new \Exception("Você ultrapassou o limite de requisições por minuto.", $http_code);
        }
        if ($http_code == 500) {
            throw new \Exception("Ocorreu algum erro inesperado. Contate o suporte técnico.", $http_code);
        }

        return [$http_code, json_decode($body)];
    }

    protected function callDelete(string $url, array $body = [])
    {
        $ch = curl_init();

        if($this->environment == 'testing'){
            curl_setopt($ch, CURLOPT_URL, $this->server_endpoint_testing. $url);
        }else{
            curl_setopt($ch, CURLOPT_URL, $this->server_endpoint_production . $url);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$this->login:$this->password");

        $body = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($http_code == 401 || $http_code == 403) {
            throw new \Exception("Acesso não autorizado! Verifique o token.", $http_code);
        }
        if ($http_code == 415) {
            throw new \Exception("JSON contém erro", $http_code);
        }
        if ($http_code == 422) {
            throw new \Exception("Não existe erro na requisição (sintaxe), porém há algum erro de semântica (por exemplo, tentar cancelar uma nota já cancelada)", $http_code);
        }
        if ($http_code == 429) {
            throw new \Exception("Você ultrapassou o limite de requisições por minuto.", $http_code);
        }
        if ($http_code == 500) {
            throw new \Exception("Ocorreu algum erro inesperado. Contate o suporte técnico.", $http_code);
        }

        return [$http_code, json_decode($body)];
    }

}