<?php


    namespace Models;
    use Models\Session;
    class Login
    {
        public function __construct()
        {

        }

        public static function getDB()
        {
            include __DIR__."/../../configs/credentials.php";
            return new \PDO("mysql:dbname=".$db_connect['db_name'].";host=".$db_connect['server'], $db_connect['username'], $db_connect['password']);
        }

        public static function authentication($role, $username, $password)
        {
            $db = self::getDB();
            $password_hash = hash('sha256', $password);

            if($role == "participant")
            {
                $checkUser = $db->prepare("SELECT * FROM Users WHERE username='".$username."' AND password='".$password_hash."'");
                $checkUser->execute(array(
                    "username" => $username,
                    "password" => $password_hash
                ));

                $row = $checkUser->fetch(\PDO::FETCH_ASSOC);
                if($row)
                {
                    Session::sess_start_user($row['id'], $row['solved'], $row['username'], $row['name'], "partcipant");   
                    return true;
                }

                else
                {
                    return false;
                }

            }

            else
            {
                $checkUser = $db->prepare("SELECT * FROM Admin WHERE username='".$username."' AND password='".$password."'");
                $checkUser->execute(array(
                    "username" => $username,
                    "password" => $password_hash
                ));

                // var_dump($checkUser);

                $result = $checkUser->fetch(\PDO::FETCH_ASSOC);
                // echo "SELECT * FROM Admin WHERE username='".$username."' AND password='".$password."'";
                if($result)
                {
                    Session::sess_start_admin($result['id'], $result['username'], $result['name'], "admin");
                    return true;
                }

                else
                {
                    return false;
                }
            }
        }
    };
?>