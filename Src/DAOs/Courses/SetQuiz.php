<?php
    namespace Src\DAOs\Courses;

    use Src\Infrastructure\ConnectionFactory;

    final class SetQuiz{
        
        public static function set(string $name, int $spots, int $response, array $questions){
            ConnectionFactory::connect()->beginTransaction();
                $insert = ConnectionFactory::connect()->prepare("INSERT INTO courses_quiz (name, spots, response) VALUES (?, ?, ?)");
                $insert->execute([$name, $spots, $response]);

                $id = ConnectionFactory::connect()->prepare("SELECT id FROM courses_quiz WHERE name = ?");
                $id->execute([$name]);
                $id = $id->fetch()['id'];

                $questions = preg_split("/\n/", $questions);
                foreach($questions as $key => $question){
                    $insert_question = ConnectionFactory::connect()->prepare("INSERT INTO questions_quiz (id_quiz, question) VALUES (?, ?)");
                    $insert_question->execute([$id, $question]);
                }
            ConnectionFactory::connect()->commit();
                
        }

        public static function setResponse(...$params){
            $insert = ConnectionFactory::connect()->prepare("INSERT INTO response_quiz (response, spots, id_user, id_quiz) VALUES (?, ?, ?, ?)");
            $insert->execute($params);
        }
    }
?>