<?php

    namespace Controllers;
    use Models\Login;
    use Models\Session;
    class LoginController
    {
        protected $twig;

        public function __construct()
        {
            $loader = new \Twig_Loader_Filesystem(__DIR__."/../views");
            $this->twig = new \Twig_Environment($loader);
        }

        public function get()
        {
            echo $this->twig->render("login.html", 
            array(
                "title" => "Login"
            ));
        }

        public function post()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['acc_type'];
            $result = Login::authentication($role, $username, $password);
            
            if($result)
            {
                if($role == "admin")
                {
                    header('Location: /admin');
                }

                else
                {
                    header('Location: /user');
                }
            }

            else
            {
                echo $this->twig->render("login.html", array(
                    "title" => "Login",
                    "error" => "Username or Password does not match!!"
                ));
            }
        }
    }

?>