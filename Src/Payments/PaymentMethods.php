<?php

    namespace Src\Payments;

    class PaymentMethods{
        use Factory;
        public string $method;
        public array $params;

        public function __construct(string $method, array $params){
            $this->method = $method;
            $this->params = $params;

            if($this->method === "credit_card"){
                $this->creditCard($this->params);
            } elseif ($this->method === "voucher"){
                $this->createVoucher($this->params);
            } elseif ($this->method === "boleto"){
                $this->createBoleto($this->params);
            } elseif ($this->method === "bank_transfer"){
                $this->createBankTransfer($this->params);
            } elseif ($this->method === "pix"){
                $this->createPix($this->params);
            }
        }

        public function creditCard(array $params): array{
            return $this->data = [
                "credit_card"               => [
                    "operation_type"        => "pre_auth",
                    "installments"          => "$params[installments]",
                    "statement_descriptor"  => "PLATAFORM AFFILIATES",
                    "card"                  => [
                        "number"            => "$params[number]",
                        "holder_name"       => "$params[holder_name]",
                        "holder_document"   => "$params[holder_document]",
                        "exp_month"         => "$params[exp_month]",
                        "exp_year"          => "$params[exp_year]",
                        "cvv"               => "$params[cvv]",
                        "brand"             => "$params[brand]",
                        "label"             => "$params[label]",
                    ]
                ]
            ];

        }


        public function createVoucher(array $params): array{
            return $this->data = [
                "voucher"                       => [
                    "statement_descriptor"      => "$params[statement_descriptor]",
                    "card"                      => [
                        "number"                => "$params[number]",
                        "holder_name"           => "$params[holder_name]",
                        "holder_document"       => "$params[holder_document]",
                        "exp_month"             => "$params[exp_month]",
                        "exp_year"              => "$params[exp_year]",
                        "cvv"                   => "$params[cvv]",
                        "brand"                 => "$params[brand]",
                        "label"                 => "$params[label]"
                    ]
                ]
            ];

            return $this->data;
        }

        public function createBoleto(){
            return $this->data = [
                "boleto"                        => [
                    "bank"                      => "$params[bank]",
                    "instructions"              => "$params[instructions]",
                    "due_at"                    => "$params[due_at]",
                    "nosso_numero"              => "$params[nosso_numero]",
                    "type"                      => "$params[type]",
                    "document_number"           => "$params[document_number]"
                ]
            ];
        }

        public function createBankTransfer(array $params): array{
            return $this->data = [
                "bank_transfer" => [
                    "bank"      => "$params[bank]",
                ]
            ];
        }

        public function createPix(array $params): array{
            return $this->data = [
                "pix"       => [
                    "bank"  => "$params[bank]",
                ]
            ];
        }
    }
?>