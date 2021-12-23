<?php
    namespace App\Controllers;

    use App\Models\{CreateCourses, CreateModules, CreateClasses, CreateQuiz, Payments};
    use Src\Repository\Courses\{CourseQuiz, CoursesClasses, CoursesModules, AllCourses};
    use Src\DAOs\Courses\{SetClasses, SetCourses, SetModules, SetQuiz};

    final class ControllerEmployee{
        private static array $params = [];

        public function home(){
            $pays = Payments::list();

            self::$params = ["pays" => $pays, "total" => 0];
        }

        public function createCourses(){
            if(isset($_POST['action'])){
                new CreateCourses($_POST['name'], $_POST['description'], $_POST['price']);
            }
        }

        public function createModules(){
            if(isset($_POST['action'])){
                new CreateModules($_POST['id_course'],$_POST['name']);
            }

            $courses = AllCourses::selectAll();
            self::$params = ["courses" => $courses];
        }

        public function createClasses(){
            if(isset($_POST['action'])){
                (new CreateClasses($_POST['id_module'], $_POST['name'], $_POST['duration'], $_POST['order_by'], $_FILES['video']))->create();
            }

            $modules = (new CoursesModules)->selectAll();
            $classes = CoursesClasses::selectAll();
            self::$params = ["modules" => $modules, "classes" => $classes];
        }

        public function createQuiz(){
            if(isset($_POST['action'])){
                new CreateQuiz($_POST['name'], $_POST['spots'], $_POST['response'], $_POST['questions']);
            }
        }

        public function paymentPending(){
            $payment_pending = Payments::pending();

            self::$params = ["payment_pending" => $payment_pending, "total" => 0];
        }

        public function listPayments(){
            $pays = Payments::list();

            self::$params = ["pays" => $pays, "total" => 0];

 
        }

        public function bankAccount(){
            if (isset($_GET['user'])) {
                $user = \Src\Repository\Users\Affiliate::getByIdBank($_GET['user']);
                $info = [
                    'holder_name'           => $user['holder_name'],
                    'bank'                  => $user['bank'],
                    'branch_number'         => $user['branch_number'],
                    'branch_check_digit'    => $user['branch_check_digit'],
                    'account_number'        => $user['account_number'],
                    'account_check_digit'   => $user['account_check_digit'],
                    'holder_type'           => $user['holder_type'],
                    'holder_document'       => $user['holder_document'],
                    'type'                  => $user['type']
                ];
            } else {
                $user = \Src\Repository\Users\Users::selectSingle($_SESSION['user_id']);
                $info = ['holder_name' => '', 'bank' => '', 'branch_number' => '', 'branch_check_digit' => '', 'account_number' => '', 'account_check_digit' => '', 'holder_type' => '', 'holder_document' => '', 'type' => ''];
            }

            self::$params = ["user" => $user, "info" => $info];

            if(isset($_POST['action'])){
                (new \Src\DAOs\Finances\PaymentsAffiliate)->setBank($_POST);
                header('Location: '.URL_AFFILIATE."/bank-account?user=".$_SESSION['user_id']);
            }


        }

        public static function params(): array{
            return self::$params;
        }

    }
?>