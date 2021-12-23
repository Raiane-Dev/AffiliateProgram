<?php
    namespace Src\DAOs\Courses;

    use Src\Infrastructure\ConnectionFactory;

    class SetViews{
        public static function set(...$params){
            $view = ConnectionFactory::connect()->prepare("INSERT INTO views_classes (id_classes, id_user, id_modules) VALUES (?, ?, ?)");
            $view->execute($params);
        }
    }

?>