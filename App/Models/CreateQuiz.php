<?php
    namespace App\Models;

    use Src\DAOs\Courses\SetQuiz;

    class CreateQuiz{
        private string $name;
        private string $questions;
        private string $spots;
        private string $response;

        public function __construct(string $name, string $spots, string $response, string $questions){
            $this->name = $name;
            $this->spots = $spots;
            $this->response = $response;
            $this->questions = $questions;

            $this->create();
        }

        public function create(){
            SetQuiz::set($this->name, $this->spots, $this->response, $this->questions);
        }
        
    }
?>