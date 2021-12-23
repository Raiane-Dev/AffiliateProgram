<?php
    namespace App\Models;

    use Src\DAOs\Courses\SetViews;

    class Views{
        private string $id_classes;
        private string $id_user;
        private string $id_modules;

        public function __construct(int $id_classes, int $id_user, int $id_modules){
            $this->id_classes = $id_classes;
            $this->id_user = $id_user;
            $this->id_modules = $id_modules;

            $this->set();
        }

        private function set(){
            SetViews::set($this->id_classes, $this->id_user, $this->id_modules);
        }
    }
?>