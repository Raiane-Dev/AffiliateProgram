<?php
    namespace App\Models;

    use Src\DAOs\Courses\SetModules;

    class CreateModules{
        private string $id_course;
        private string $name;

        public function __construct(int $id_course, string $name){
            $this->id_course = $id_course;
            $this->name = $name;

            $this->create();
        }

        public function create(){
            SetModules::set($this->id_course, $this->name);
        }
        
    }
?>