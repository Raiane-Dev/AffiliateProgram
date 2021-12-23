<?php

    namespace Src\Payments;

    trait Factory{
        public string $base;
        public string $endpoint;
        public string $token_secret;
        public string $token_public;
        private string $code_affiliate;
        public string $api;
        public array $data;

        public function __construct(){
            $this->base = 'https://api.pagar.me/core/v5';
            $this->token_secret = 'sk_test_tra6ezsW3BtPPXQa';
            $this->token_public = 'pk_test_gaa5xzfz7CfPPZAv';
        }

        public function postRequest(){
            $url = $this->base.$this->endpoint;

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_POST            => true,
                CURLOPT_POSTFIELDS      => http_build_query($this->data),
                CURLOPT_HTTPHEADER      => ["Authorization: Basic {$this->token_secret}", 'Content-Type: application/json']
            ]);
            $code_response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($code_response === 200 || $code_response === 302 || $code_response === 0){
                print_r($code_response);
                if(!isset($response->customer->name) || !isset($response->customer->email) || !isset($response->customer->birthdate)){
                    return;
                }

                new \Src\DAOs\Users\Set($response->customer->name, $response->customer->email, $response->customer->birthdate, ["User.png"], "student");
                $student = \Src\Repository\Users\Users::getByEmail($response->customer->email);
                (new \Src\DAOs\Finances\PaymentsAffiliate)->setPay($this->data['amount'], $this->code_affiliate, $student['id']);
            }
        }

        public function getRequest(){
            $url = $this->base.$this->endpoint;

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_HTTPGET            => true,
                CURLOPT_HTTPHEADER      => ["Authorization: Bearer {$this->token}", 'Content-Type: application/json']
            ]);
            $response = curl_exec($ch);
            curl_close($ch);

            var_dump($response);
        }
    }

?>