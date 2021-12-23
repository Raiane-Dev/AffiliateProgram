<?php
    namespace Src\Permissions;
    use Src\Permissions\{PermissionsAffiliate, PermissionsStudent};

    final class Levels{
        private string $function;
        const low = 'student';
        const mid = 'affiliate';
        const high = 'admin';

        public function __construct(){
            if(isset($_SESSION['function'])){
                $this->function = $_SESSION['function'];
                $this->type();
            } elseif (!isset($_SESSION['login']) && strpos($_SERVER['PATH_INFO'], "DashboardEmployee") || strpos($_SERVER['PATH_INFO'], "StudentDashboard")) {
               header("location: ".URL_WEB);
            }
        }

        private function type(){
            if($this->function == self::low){
                new PermissionsStudent;
            }
            if($this->function == self::mid){
                new PermissionsAffiliate;
            }
            if($this->function == self::high){
                new PermissionsAdmin;
            }
        }
    }
?>