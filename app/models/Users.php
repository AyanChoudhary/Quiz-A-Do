<?php

    namespace Models;
    class Users
    {
        public function __construct()
        {

        }

        public static function getDB()
		{
			include __DIR__."/../../configs/credentials.php" ;
			return new \PDO("mysql:dbname=".$db_connect['db_name'].";host=".$db_connect['server'] , $db_connect['username'] , $db_connect['password']) ;
        }

        public function show_questions()
        {
            $db = self::getDB();

            for($sym = 1; $sym >= 1; $sym++)
            {
                $questions = $db->prepare("SELECT * FROM Questions WHERE id = :sym");
                $questions->execute(array(
                    "sym" => $sym
                ));
                $row = $questions->fetch(\PDO::FETCH_ASSOC);
                
                if($row != NULL)
                {
                    $Question[$sym] = array(
                        "id" => $row['id'],
                        "question" => $row['question'],
                        "points" => $row['points'],
                        "answer" => $row['answer'],
                        "option1" => $row['option1'],
                        "option2" => $row['option2'],
                        "option3" => $row['option3'],
                        "option4" => $row['option4']
                    );
                }

                else
                break;
            }
            
            return $Question;
            
        }
        
        public function question_submit($id, $ans)
        {

            $db = self::getDB();

            $query = $db->prepare("SELECT * FROM Questions WHERE id = :id");
            $query->execute(array(
                "id" => $id
            ));

            $result = $query->fetch(\PDO::FETCH_ASSOC);

            if ($ans == $result['answer'])
            {
                $points += $result['points'];
            }

            return $points;
        }

        public function user_update($points)
        {
            $db = self::getDB();
            session_start();
            $id = $_SESSION['usr_id'];
            $query = $db->prepare("UPDATE Users SET points = :points, solved = 1 WHERE id = :id");
            $query->execute(array(
                "points" => $points,
                "id" => $id
            ));
        }
    }
?>