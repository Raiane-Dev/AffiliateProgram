<?php
    namespace App\Models;

    use Src\DAOs\Courses\SetClasses;

    final class CreateClasses{
        private string $id_module;
        private string $name;
        private int $duration;
        private int $order_by;
        private array $video;

        public function __construct(int $id_module, string $name, string $duration, int $order_by, array $video){
            $this->id_module = $id_module;
            $this->name = $name;
            $this->duration = $duration;
            $this->order_by = $order_by;
            $this->video = $video;
        }

        public function create(){
            SetClasses::set($this->id_module, $this->name, $this->duration, $this->order_by + 1, $this->video['name']);
            move_uploaded_file($this->video['tmp_name'], dirname(__DIR__, 2)."\Storage\Video\\".$this->video['name']);
        }
    }
?>