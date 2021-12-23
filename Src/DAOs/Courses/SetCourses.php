<?php
    namespace Src\DAOs\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class SetCourses{
        public static function set(...$params){
            $insert = ConnectionFactory::connect()->prepare("INSERT INTO courses (name, description, price) VALUES (?, ?, ?)");
            $insert->execute($params);
        }
    }
?>