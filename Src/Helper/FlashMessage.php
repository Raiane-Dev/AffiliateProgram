<?php

    namespace Src\Helper;

    trait FlashMessage{
        public static function alertError($message){
            echo "<script> alert('{$message}'); </script>";
        }

        public static function alertSuccess($message){
            echo "<script> alert('{$message}'); </script>";
        }

        public static function redirect($uri){
            echo "<script> window.location.href = '{$uri}'; </script>";
        }
    }

?>