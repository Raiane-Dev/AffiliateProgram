<?php
    namespace Src\DAOs\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class SetClasses{
        public static function set(...$params){
            $insert = ConnectionFactory::connect()->prepare("INSERT INTO courses_classes (id_module, name, duration, order_by, video) VALUES (?, ?, ?, ?, ?)");
            $insert->execute($params);
        }
    }
?>