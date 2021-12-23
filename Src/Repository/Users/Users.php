<?php
    namespace Src\Repository\Users;

    use Src\Infrastructure\ConnectionFactory;

    class Users{

        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM users");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectSingle(int $id): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE id = $id");
            $all->execute();
            return $all->fetch(\PDO::FETCH_ASSOC);
        }

        public static function getByEmail(string $email): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE email = '$email'");
            $all->execute();
            return $all->fetch(\PDO::FETCH_ASSOC);
        }
    }
?>