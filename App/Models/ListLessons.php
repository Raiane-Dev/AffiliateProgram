<?php

    namespace App\Models;

    use Src\Repository\Courses\{CoursesClasses, CoursesModules, CoursesQuiz, ViewsClasses};

    class ListLessons{

        public function responses(): array{
            return CoursesQuiz::selectList($_SESSION['user_id']);
        }

        public function quiz(): array{
            return CoursesQuiz::selectAll();
        }

        public function classes(): array{
            return CoursesClasses::selectAll();
        }

        public function modules(): array{
            return CoursesModules::selectAll();
        }

        public function views(): array{
            return ViewsClasses::selectAll($_SESSION['user_id']);
        }

        public function countViews($id_modules){
            return ViewsClasses::math($_SESSION['user_id'], $id_modules);
        }
        
    }
?>