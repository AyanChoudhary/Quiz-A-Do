<?php

    namespace Models;
    class Leaderboard
    {
        public function __construct()
        {

        }

        public static function getDB()
		{
			include __DIR__."/../../configs/credentials.php" ;
			return new \PDO("mysql:dbname=".$db_connect['db_name'].";host=".$db_connect['server'] , $db_connect['username'] , $db_connect['password']) ;
        }

        public function display_results()
        {
            $db = self::getDB();

            $query = $db->prepare("SELECT * FROM Users ORDER BY points DESC");
            $query->execute();

            $result = $query->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }
    }
?>