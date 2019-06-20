<?php
    namespace Models;
    class Session
    {
        public function __construct()
        {

        }

        public function sess_start_admin($id, $username, $name)
        {
            session_start();
            session_regenerate_id();
            $_SESSION['usr_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['role'] = "admin";
        }

        public function sess_start_user($id, $solved, $username, $name)
        {
            session_start();
            session_regenerate_id();
            $_SESSION['usr_id'] = $id;
            $_SESSION['solved'] = $solved;
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['role'] = "participant";
        }

        public function sess_check_admin()
        {
            $role = $_SESSION['role'];
            if(!isset($_SESSION['username']) || $role != "admin")
            {
                self::logout();
                header('Location: /');
            }
        }

        public function sess_check_user()
        {
            $role = $_SESSION['role'];
            if(!isset($_SESSION['username']) || $role != "participant")
            {
                self::logout();
                header('Location: /');
            }
        }

        public function logout()
        {
            session_destroy();
        }


    }
?>