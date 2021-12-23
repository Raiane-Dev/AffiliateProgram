<?php
    namespace App\Models;

    use Src\Repository\Finances\PaymentsAffiliate;

    class Payments{

        public static function pending(): array{
            return PaymentsAffiliate::selectUserPayment($_SESSION['user_id']);
        }

        public static function list(): array{
            return PaymentsAffiliate::selectList();
        }
        
    }
?>