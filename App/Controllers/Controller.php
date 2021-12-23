<?php
    namespace App\Controllers;

    use App\Models\Checkout;
    use Src\Repository\Courses\AllCourses;

    final class Controller{
        private static array $params = [];

        public function home(){
            $course = AllCourses::selectWhere(1);
            
            self::$params = ["course" => $course];

            $this->access();
        }
        
        public function checkout(){
            $code = preg_split('/\//', $_SERVER['REQUEST_URI']);
            $course = AllCourses::selectWhere($code[4]);

            if(isset($_POST['action'])){
                new Checkout($_POST, $code, $course);
            }
            
            self::$params = ["code" => $code[3], "course" => $course];
        }

        public function access(){
            if(isset($_POST['action'])){
                new \App\Models\Access($_POST['name'], $_POST['email'], $_POST['password'], $_FILES['image'], $_POST['function']);
            }
        }

        public static function params(): array{
            return self::$params;
        }
    }
?>