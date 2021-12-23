<?php
    namespace App\Models;

    use Src\Authenticator\AuthenticatorBase;
    use  Src\Infrastructure\ConnectionFactory;

    final class Access extends AuthenticatorBase{
        private string $name;
        private string $email;
        private string $password;
        private array $image;
        private string $function;

        public function __construct(string $name, string $email, string $password, array $image, string $function){
            $this->email = $email;
            $this->name = $name;
            $this->password = $password;
            $this->image = $image;
            $this->function = $function;

            $this->access();
        }

        private function access(){
            $email = $this->email;
            $user = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE email = '$email'");
            $user->execute();
            $userInfo = $user->fetch();

            if($user->rowCount() >= 1){
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $userInfo['id'];
                $_SESSION['name'] = $userInfo['name'];
                $_SESSION['email'] = $userInfo['email'];
                $_SESSION['image'] = $userInfo['image'];
                $_SESSION['function'] = $userInfo['function'];
                \Src\Helper\FlashMessage::alertSuccess("Logged");
                if ($userInfo['function'] === 'student'){
                    \Src\Helper\FlashMessage::redirect("/StudentDashboard/home");
                } else {
                    \Src\Helper\FlashMessage::redirect("/DashboardEmployee/home");
                }
                return true;
            } else {
                $this->register();
            }
            
        }

        public function register(){
            if($this->verifyEmail($this->email) && $this->verifyPassword($this->password) && $this->verifyName($this->name) && $this->verifyImage($this->image)){
                new \Src\DAOs\Users\Set($this->name, $this->email, $this->password, $this->image, $this->function);

                if($this->function === "affiliate"){
                    ConnectionFactory::connect()->beginTransaction();
                    $user = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE email = '$this->email'");
                    $user->execute();
                    $user = $user->fetch();
                    $user = ConnectionFactory::connect()->prepare("INSERT INTO affiliate_token (id_user, code) VALUES (?, ?)");
                    $user->execute([$_SESSION['user_id'], md5($_SESSION['user_id'])]);
                    ConnectionFactory::connect()->commit();
                }
                \Src\Helper\FlashMessage::alertSuccess("Registred");
            }
        }
    }
?>