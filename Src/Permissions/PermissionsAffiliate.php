<?php
    namespace Src\Permissions;

    final class PermissionsAffiliate implements InterfacePermissions{
        public function __construct(){
            $this->uri();
        }
        
        public function uri(): array{
            $uri = [
                "home",
                "payment-pending",
                "bank-account",
                "checkout"
            ];

            $currentUri = preg_split('/\//', $_SERVER['PATH_INFO']);
            if(!in_array($currentUri[2], $uri)) {
                die('You do not have permission');
            } elseif ($currentUri[1] === "StudentDashboard"){
                die("You do not have permission");
            }

            return $uri;
        }
    }
?>