<?php
    namespace Src\Repository\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class CoursesModules{

        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM courses_modules");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectAllWhere(int $id): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM courses_modules WHERE id = $id");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
?>