<?php
    
    namespace Src\DAOs\Users;
    use Src\Infrastructure\ConnectionFactory;

    final class Set{
        private string $name;
        private string $email;
        private string $password;
        private array $image;
        private string $function;

        public function __construct($name, $email, $password, $image, $function){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->image = $image;
            $this->function = $function;

            $this->register();
        }

        private function register(){
            $user = ConnectionFactory::connect()->prepare("INSERT INTO users (name, email, password, image, function) VALUES (?, ?, ?, ?, ?)");
            $user->execute([$this->name, $this->email, $this->password, $this->image['name'], $this->function]);
        }
    }
?>