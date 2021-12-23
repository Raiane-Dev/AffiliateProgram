<?php
    namespace Src\Repository\Users;

    use Src\Infrastructure\ConnectionFactory;

    final class Affiliate{
        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE function = 'affiliate'");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        
        public static function recoverTokenByUser(int $id){
            $token = ConnectionFactory::connect()->prepare("SELECT * FROM affiliate_token WHERE id_user = $id");
            $token->execute();
            return $token->fetch(\PDO::FETCH_ASSOC)['code'];
        }

        public static function recoverToken(string $code): array{
            $token = ConnectionFactory::connect()->prepare("SELECT * FROM affiliate_token WHERE code = '$code'");
            $token->execute();
            return $token->fetch(\PDO::FETCH_ASSOC);
        }

        public static function getBank(string $code): array{
            $token = self::recoverToken($code);

            $bank = ConnectionFactory::connect()->prepare("SELECT * FROM bank_account WHERE id_user = $token[id_user]");
            $bank->execute();
            return $bank->fetch(\PDO::FETCH_ASSOC);
        }

        
        public static function getByIdBank(int $id): array{
            $user = \Src\Repository\Users\Users::selectSingle($id);
            $bank = ConnectionFactory::connect()->prepare("SELECT * FROM bank_account WHERE id_user = $user[id]");
            $bank->execute();
            return $bank->fetch(\PDO::FETCH_ASSOC);
        }

        public static function getUserByToken(string $code): array{
            $token = self::recoverToken($code);

            $bank = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE id = $token[id_user]");
            $bank->execute();
            return $bank->fetch(\PDO::FETCH_ASSOC);
        }
    }
?>