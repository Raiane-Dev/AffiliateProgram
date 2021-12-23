<?php

    namespace Src\Authenticator;

    abstract class AuthenticatorBase{
        use \Src\Helper\FlashMessage;
        private string $flashMessage = '';

        protected function verifyEmail(string $email){
            $validation = filter_var($email, FILTER_VALIDATE_EMAIL);
            if($validation == false){
                $this->flashMessage = "Error";
                return;
            }

            return true;
        }

        protected function verifyPassword(string $password){
            $pattern = "/([\d]{1})+([\.]{1})+([A-Z]{0})/";
            $caracters = preg_match($pattern,$password);

            if(strlen($password) > 8 && $caracters == false){
                $this->flashMessage = "Oops! The password must contain at least one number, one special symbol and one capital letter.";
                return;
            }

            return true;
        }

        protected function verifyName(string $name){
            $split = preg_split("/ /", $name);
            $caracters = preg_match_all("/[\.]/", $name);

            if($caracters == true AND !isset($split[1])){
                $this->flashMessage = "Error";
            }

            return true;
        }

        protected function verifyImage(array $image){
            $path = pathinfo("assets/$image[name]");
            // if($path['extension'] == 'png' OR $path['extension'] == 'jpg' OR $path['extension'] == 'jpeg'){
            //     $this->flashMessage = "Error!";
            //     return;
            // }

            move_uploaded_file($image["tmp_name"], dirname(__DIR__, 2)."\Storage\Assets\\".$image['name']);
            return true;
        }


        public function getMessage(){
            return \Src\Helper\FlashMessage::alertError($this->flashMessage);
        }
    }
?>