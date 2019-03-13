<?php

    namespace Models;
    class Admin
    {
        public function __construct()
        {

        }

        public static function getDB()
		{
			include __DIR__."/../../configs/credentials.php" ;
			return new \PDO("mysql:dbname=".$db_connect['db_name'].";host=".$db_connect['server'] , $db_connect['username'] , $db_connect['password']) ;
		}

        public function question_upload($points, $question, $answer, $option1, $option2, $option3, $option4)
        {
            $db = self::getDB();

            $addQues = $db->prepare("INSERT INTO Questions (points, question, answer, option1, option2, option3, option4) 
            VALUES (:points, :question, :answer, :option1, :option2, :option3, :option3)");

            $row = $addQues->execute(array(
                ":points"=>$points,
                ":question"=>$question,
                ":answer"=>$answer,
                ":option1"=>$option1,
                ":option2"=>$option2,
                "option3"=>$option3,
                "option4"=>$option4
            ));
        }
    }
?>