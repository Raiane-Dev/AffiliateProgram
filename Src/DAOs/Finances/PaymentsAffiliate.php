<?php
    namespace Src\DAOs\Finances;

    use Src\Infrastructure\ConnectionFactory;

    final class PaymentsAffiliate{

        public function setPay(int $amount, string $code_affiliate, int $id_student){
            ConnectionFactory::connect()->beginTransaction();
                $insert = ConnectionFactory::connect()->prepare("INSERT INTO payments_affiliate (amount, code_affiliate, id_student) VALUES (?, ?, ?)");
                $insert->execute([$amount, $code_affiliate, $id_student]);
            ConnectionFactory::connect()->commit();
        }

        public static function setBank(array $params){
            $insert = ConnectionFactory::connect()->prepare("INSERT INTO bank_account (id_user, holder_name, bank, branch_number, branch_check_digit, account_number, account_check_digit, holder_type, holder_document, type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $insert->execute([$_SESSION['user_id'], $params['holder_name'], $params['bank'], $params['branch_number'], $params['branch_check_digit'], $params['account_number'], $params['account_check_digit'], $params['holder_type'], $params['holder_document'], $params['type']]);
        }
    }
?>