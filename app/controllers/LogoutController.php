<?php

    namespace Controllers;
    use Models\Session;

    class LogoutController
    {
        public function __construct()
        {

        }

        public function get()
        {   
            Session::logout();
            header("Location: /");
        }

        public function post()
        {
            Session::logout();
            header('Location: /');
        }
    }
?>