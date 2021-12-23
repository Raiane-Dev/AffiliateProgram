<?php

    namespace App\Route;

    use App\Route\Render;

    final class Router{

        public function get(string $path, string $class, string $func) {
            $slug = \Src\Format\Slug::format($_SERVER['PATH_INFO']);

            if (strripos($slug, $path) !== false) {
                (new $class)->$func();

                $slug = explode('/', $path);

                (new Render)->commandRender(
                    "App/Views/{$slug[1]}/templates/header.php",
                    "App/Views/{$slug[1]}/templates/footer.php",
                    "App/Views{$path}.php",
                    $class::params()
                );
            }
        }

        public function setError(){
            if(filter_var($_SERVER['PATH_INFO'], FILTER_VALIDATE_URL)){
                echo 'erro';
            }
        }
    }

?>