<?php
    namespace Src\DAOs\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class SetModules{
        public static function set(...$params){
            $insert = ConnectionFactory::connect()->prepare("INSERT INTO courses_modules (id_course, name) VALUES (?, ?)");
            $insert->execute($params);
        }
    }
?>