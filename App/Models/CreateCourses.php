<?php
    namespace App\Models;

    use Src\DAOs\Courses\SetCourses;

    final class CreateCourses{
        private string $name;
        private string $description;
        private string $price;


        public function __construct(string $name, string $description, float $price){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;

            $this->create();
        }

        private function create(){
            SetCourses::set($this->name, $this->description, $this->price);
        }
        
    }
?>