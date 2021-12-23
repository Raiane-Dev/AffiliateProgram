<?php
    namespace Src\Exceptions;

    final class Treatment extends \Exception{
        const Email = "raiane.dev@gmail.com";
        private $error;

        public function __construct($error_reporting){
            $this->error = $error_reporting;

            $this->sendLog();
            self::messageAlert();
        }

        protected function sendLog(){
            $message = 
            "\n Message: ".$this->error->getMessage().
            "\n File: ".$this->error->getFile().
            "\n Code: ".$this->error->getCode().
            "\n Line: ".$this->error->getLine();

            error_log($message, 1, "raiane.dev@gmail.com");
        }

        public static function messageAlert(){
            echo "We are under maintenance!";
        }
    }
?>