<?php
    namespace Src\Repository\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class CoursesQuiz{
        use \Src\Helper\FlashMessage;

        public static function selectAll(): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM courses_quiz");
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectSingle(int $id): array{
            $all = ConnectionFactory::connect()->prepare("SELECT * FROM courses_quiz WHERE id = $id");
            $all->execute();
            return $all->fetch(\PDO::FETCH_ASSOC);
        }

        public static function selectList(int $user_id): array{
            $all = ConnectionFactory::connect()->prepare(
                "SELECT courses_quiz.id, courses_quiz.name, courses_quiz.response, 
                response_quiz.spots, response_quiz.response AS response_two, response_quiz.spots AS spots_two 
                FROM courses_quiz RIGHT JOIN response_quiz 
                ON courses_quiz.id = response_quiz.id_quiz 
                WHERE response_quiz.id_user = $user_id"
            );
            $all->execute();
            return $all->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectQuestions(int $id): array{
            $questions = ConnectionFactory::connect()->prepare("SELECT * FROM questions_quiz WHERE id_quiz = $id");
            $questions->execute();
            return $questions->fetchAll(\PDO::FETCH_ASSOC);
        }

        public static function selectResponses(int $id_quiz, int $quiz_respond){
            $questions = ConnectionFactory::connect()->prepare("SELECT * FROM response_quiz WHERE id_quiz = $id_quiz");
            $questions->execute();
            $respond = $questions->fetch(\PDO::FETCH_ASSOC);

            if($questions->rowCount() == 1){
                if($respond['response'] !== $quiz_respond){
                    \Src\Helper\FlashMessage::alertError("Você errou!");
                } else {
                    \Src\Helper\FlashMessage::alertSuccess("Você Acertou!");
                }
            }
            return $respond;
        }

        
        public static function whereResponses(int $id_quiz){
            $questions = ConnectionFactory::connect()->prepare("SELECT * FROM response_quiz WHERE id_quiz = $id_quiz");
            $questions->execute();
            return $questions->rowCount();
        }
    }
?>