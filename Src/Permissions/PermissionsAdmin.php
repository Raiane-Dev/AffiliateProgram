<?php
    namespace Src\Permissions;

    final class PermissionsAdmin implements InterfacePermissions{
        public function __construct(){
            $this->uri();
        }

        public function uri(): array{
            $uri = [
                "home",
                "create-classes",
                "create-course",
                "create-module",
                "create-quiz",
                "bank-account",
                "list-payments",
                "payment-pending",
                "course",
                "quiz",
                "list-quiz",
                "list-lessons",
                "list-responses",
                "checkout"
            ];
            
            $currentUri = preg_split('/\//', $_SERVER['PATH_INFO'])[2];
            if (!in_array($currentUri, $uri)) {
                die('You do not have permission');
            }
            
            return $uri;
        }
    }
?>