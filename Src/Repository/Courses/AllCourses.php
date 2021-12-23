<?php
    namespace Src\Repository\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class AllCourses{
        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM courses");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectWhere(int $id): array{
            $single = ConnectionFactory::connect()->prepare("SELECT * FROM courses WHERE id = $id");
            $single->execute();
            return $single->fetch();
        }
    }
?>