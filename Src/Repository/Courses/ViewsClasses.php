<?php
    namespace Src\Repository\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class ViewsClasses{

        public static function selectAll(int $id): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM views_classes WHERE id_user = $id");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectWhere(int $id_user, int $id_classe): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM views_classes WHERE id_user = $id_user AND id_classes = $id_classe");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function math($id_user, $id_module){
            $number = ConnectionFactory::connect()->prepare("SELECT * FROM views_classes WHERE id_user = $id_user AND id_modules = $id_module");
            $number->execute();
            $lessons = ConnectionFactory::connect()->prepare("SELECT * FROM courses_classes WHERE id_module = $id_module");
            $lessons->execute();

            return ($number->rowCount() * 100) / $lessons->rowCount();
        }
    }
?>