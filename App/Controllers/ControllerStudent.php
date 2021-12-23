<?php
    namespace App\Controllers;

    use App\Models\{Views, Quiz, ListLessons};
    use Src\Repository\Courses\{CoursesClasses, CoursesModules, ViewsClasses, CoursesQuiz};

    final class ControllerStudent{
        private static array $params = [];

        public function home(){
            $list = (new ListLessons)->responses();
            self::$params = ["list" => $list];
        }

        public function listClasses(){
            $uri = explode('/',$_SERVER['PATH_INFO']);
            $id = parse_url($uri[4], PHP_URL_PATH);
            $id_module = parse_url($uri[3], PHP_URL_PATH);
            $course = CoursesClasses::selectWhere($id, $id_module);
            $modules = CoursesModules::selectAll();
            $selectModuleLessons = CoursesClasses::selectModuleLessons($id_module);

            self::$params = ["uri" => $uri, "id" => $id, "id_module" => $id_module, "course" => $course, "modules" => $modules, "selectModuleLessons" => $selectModuleLessons];

            if(isset($_POST['view'])){
                new Views($id, $_SESSION['user_id'], $id_module);
            }

        }

        
        public function showQuiz(){
            $id = filter_var($_SERVER['PATH_INFO'], FILTER_SANITIZE_NUMBER_INT);
            $quiz = CoursesQuiz::selectSingle($id);
            $questions = CoursesQuiz::selectQuestions($id);
            $respond = CoursesQuiz::selectResponses($id, $quiz['response']);
            $rows = CoursesQuiz::whereResponses($id);

            if(
                isset( $questions[$quiz['response']] )
                ? $questions[$quiz['response'] -1]["result"] = "accept"
                : $questions[$quiz['response']]["result"] = "error"
            );

            self::$params = ["id" => $id, "quiz" => $quiz, "questions" => $questions, "respond" => $respond, "rows" => $rows];
            
            if(isset($_POST['action'])){
                if( $_POST['response'] !== $quiz['response'] ? $spots = 0 : $spots = $quiz['spots']);
                if($_POST['response'] !== $quiz['response'] ? $spots = 0 : $spots = $quiz['spots']);
                new Quiz($_POST['response'], $spots, $_SESSION['user_id'], $_POST['id_quiz']);
            }
        }

        public function listLessons(){
            $list = (new ListLessons)->modules();
            $lessons = (new ListLessons);
            $classes = CoursesClasses::class;

            self::$params = ["list" => $list, "lessons" => $lessons, "classes" => $classes];
        }

        public function listResponses(){
            $list = (new ListLessons)->responses();
            self::$params = ["list" => $list];
        }

        public function listQuiz(){
            $list = (new ListLessons)->quiz();
            self::$params = ["list" => $list];
        }

        public static function params(): array{
            return self::$params;
        }


    }
?>