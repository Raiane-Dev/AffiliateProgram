<?php

    namespace Src\Payments;

    use Src\Payments\PaymentMethods;

    final class ActionPay{
        use Factory;

        public function payIntent(array $params, int $amount, string $description, string $code_affiliate, string $recipient_id): object{
            $this->endpoint = "/orders/";
            $this->data = [
              "customer"                    => [
                "name"                      => "$params[name]",
                "email"                     => "$params[email]",
                "document"                  => "$params[document]",
                "document_type"             => "$params[document_type]",
                "type"                      => "individual",
                "gender"                    => "$params[gender]",
                "address"                   => [
                    "country"               => "$params[country]",
                    "state"                 => "$params[state]",
                    "city"                  => "$params[city]",
                    "zip_code"              => "$params[zip_code]",
                    "line_1"                => "$params[line_1]",
                    "line_2"                => "$params[line_2]",
                ],
                "birthdate"                 => "$params[birthdate]",
              ],
              "items"                       => [
                  "amount"                  => $amount,
                  "description"             => "$description",
                  "quantity"                => "1"
              ],
              "payments"                    => [
                "payment_method"            => "$params[payment_method]",
                new PaymentMethods($params['payment_method'], $params)
              ],
              "antifraud_enabled"           => true,
              "amount"                      => $amount,
              "split"                       => [
                  "amount"                  => (10 * $amount) / 100,
                  "recipient_id"            => "$recipient_id",
                  "type"                    => "percentage",
                  "options"                 => [
                    "charge_processing_fee" => true,
                    "charge_remainder_fee"  => true,
                    "liable"                => false
                  ]
              ]
            ];

            $this->code_affiliate = $code_affiliate;

            $this->postRequest();
            return $this;
        }


    }
?>