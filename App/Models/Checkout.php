<?php
    namespace App\Models;

    use Src\Payments\{ActionPay, Transfers};
    use Src\Repository\Courses\AllCourses;

    class Checkout{
        private array $params;
        private string $code;
        private array $course;

        public function __construct(array $params, array $code, $course){
            $this->params = $params;
            $this->code = $code[3];
            $this->course = $course;

            $this->splicePayment();
        }

        public function splicePayment(){
            $transfer = (new Transfers)->createTransfer($this->code);
            $payment = (new ActionPay)->payIntent($this->params, $this->course['price'], $this->course['description'], $this->code[4], $transfer->id);
        
        }
    }
?>