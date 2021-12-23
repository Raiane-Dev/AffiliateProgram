<?php

    namespace Src\Payments;

    use Src\Payments\PaymentMethods;

    final class Transfers{
        use Factory;

        public function createTransfer(string $code): array{
            $bank = \Src\Repository\Users\Affiliate::getBank($code);
            $user = \Src\Repository\Users\Affiliate::getUserByToken($code);

            $this->endpoint = "/recipients";
            $this->data = [
                "name"                            => "$user[name]",
                "email"                           => "$user[email]",
                "description"                     => "Transfer",
                "document"                        => "CPF",
                "type"                            => "individual",
                "default_bank_account"            => [
                    "holder_name"                 => "$bank[holder_name]",
                    "bank"                        => "$bank[bank]",
                    "branch_number"               => "$bank[branch_number]",
                    "branch_check_digit"          => "$bank[branch_check_digit]",
                    "account_number"              => "$bank[account_number]",
                    "account_check_digit"         => "$bank[account_check_digit]",
                    "holder_type"                 => "$bank[holder_type]",
                    "holder_document"             => "$bank[holder_document]",
                    "type"                        => "$bank[type]",
                ],
                "transfer_settings"               => [
                    "transfer_enabled"            => true,
                    "transfer_interval"           => "day",
                    "transfer_day"                => 7
                ]
            ];

            return $this->postRequest();
        }
    }
?>