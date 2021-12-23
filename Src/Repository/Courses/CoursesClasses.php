<?php
    namespace Src\Repository\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class CoursesClasses{

        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM courses_classes");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        
        public static function selectModuleLessons(int $id): array{
            $join = ConnectionFactory::connect()->prepare("SELECT * FROM courses_classes LEFT JOIN views_classes ON courses_classes.id = views_classes.id_classes WHERE courses_classes.id_module = $id");
            $join->execute();
            $join = $join->fetchAll(\PDO::FETCH_ASSOC);
            foreach($join as $key => $value){
                if($join[$key]['id_classes'] !== null){
                    $join[$key]['view'] = "eye";
                    $join[$key]['color'] = "#007aff";
                } else {
                    $join[$key]['view'] = "play";
                    $join[$key]['color'] = "#3b4551";
                }
            }
            return $join;

        }

        public static function selectWhere(int $id, int $id_module): array{
            $single = ConnectionFactory::connect()->prepare("SELECT * FROM courses_classes WHERE id = $id AND id_module = $id_module");
            $single->execute();
            return $single->fetch();
        }

        public static function selectClasses(int $id_module): array{
            $single = ConnectionFactory::connect()->prepare("SELECT * FROM courses_classes WHERE id_module = $id_module");
            $single->execute();
            return $single->fetchAll();
        }
    }
?>