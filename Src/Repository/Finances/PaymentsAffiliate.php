<?php
    namespace Src\Repository\Finances;

    use Src\Infrastructure\ConnectionFactory;

    final class PaymentsAffiliate{

        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM payments_affiliate");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectUserPayment(int $id): array{
            $list = ConnectionFactory::connect()->prepare(
                "SELECT * FROM payments_affiliate INNER JOIN affiliate_token ON affiliate_token.id_user = $id"
            );
            $list->execute();
            return $list->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectList(): array{
            $all = ConnectionFactory::connect()->prepare(
                "SELECT * FROM payments_affiliate INNER JOIN affiliate_token ON affiliate_token.code = payments_affiliate.code_affiliate INNER JOIN users ON affiliate_token.id_user = users.id WHERE users.function = 'affiliate'"
            );
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
?>