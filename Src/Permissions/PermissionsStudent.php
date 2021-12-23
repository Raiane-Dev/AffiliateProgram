<?php
    namespace Src\Permissions;

    final class PermissionsStudent implements InterfacePermissions{
        public function __construct(){
            $this->uri();
        }
        
        public function uri(): array{
            $uri = [
                "home",
                "course",
                "quiz",
                "list-quiz",
                "list-responses",
                "list-lessons",
                "checkout"
            ];

            $currentUri = preg_split('/\//', $_SERVER['PATH_INFO']);
            if (!in_array($currentUri[2], $uri)) {
                die('You do not have permission');
            } elseif ($currentUri[1] === "DashboardEmployee"){
                die("You do not have permission");
            }

            return $uri;
        }
    }
?>