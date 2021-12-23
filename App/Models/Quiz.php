<?php
    namespace App\Models;

    use Src\DAOs\Courses\SetQuiz;

    class Quiz{
        private int $response;
        private string $spots;
        private string $id_user;
        private string $id_quiz;

        public function __construct(string $response, string $spots, string $id_user, int $id_quiz){
            $this->response = $response;
            $this->spots = $spots;
            $this->id_user = $id_user;
            $this->id_quiz = $id_quiz;

            $this->response();
        }

        private function response(){
            SetQuiz::setResponse($this->response, $this->spots, $this->id_user, $this->id_quiz);
        }
        
    }
?>