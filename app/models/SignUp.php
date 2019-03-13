<?php

    namespace Models;
    
	class SignUp
	{
		public function __construct()
		{

		}

		public static function getDB()
		{
			include __DIR__."/../../configs/credentials.php" ;
			return new \PDO("mysql:dbname=".$db_connect['db_name'].";host=".$db_connect['server'] , $db_connect['username'] , $db_connect['password']) ;
		}

		public static function checkAndAddUser($role, $name, $username , $password)
		{
			$db = self::getDB();

			if($role == "participant")
			{
			
				$checkUser = $db->prepare("SELECT * FROM Users WHERE username = :username");
				$checkUser->execute(array(
					"username"=>$username
				)) ;
				
				$row = $checkUser->fetch(\PDO::FETCH_ASSOC);
				
				if($row)
				{
					return true;
				}
				
				else
				{
					$password_hash = hash('sha256', $password);
					$addUser = $db->prepare("INSERT INTO Users (points, name, username, password, solved) 
					VALUES ('0', :name, :username, :password_hash, '0')") ;
					$row = $addUser->execute(array(
						":points"=>'0',
						":name"=>$name,
						":username"=>$username,
						":password_hash"=>$password_hash,
						"solved"=>'0'
					));
					
					return false;
				}
			}

			else
			{
				$checkUser = $db->prepare("SELECT * FROM Admin WHERE username=:username");
				$checkUser->execute(array(
					"username"=>$username
				)) ;
				
				$row = $checkUser->fetch(\PDO::FETCH_ASSOC);
				
				if($row)
				{
					return true;
				}
				
				else
				{
					$password_hash = hash('sha256', $password);
					$addUser = $db->prepare("INSERT INTO Admin (name, username, password) 
					VALUES (:name, :username, :password_hash)") ;
					$row = $addUser->execute(array(
						":name"=>$name,
						":username"=>$username,
						":password_hash"=>$password_hash,
					));
					
					return false;
				}
			}
		}
	}
?>