<?php

    namespace Controllers;
    use Models\SignUp;

    class SignUpController
    {
        protected $twig;
        public function __construct()
        {
            $loader = new \Twig_Loader_Filesystem(__DIR__ . "/../views") ;
			$this->twig = new \Twig_Environment($loader) ;
		}
		public function get() {
			echo $this->twig->render("signup.html",array(
							"title"=>"SignUp")) ;
		}
		public function post()
		{
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$role = $_POST['acc_type'];
			
			$result = SignUp::checkAndAddUser($role, $name, $username, $password);
			if($result)
			{
				echo $this->twig->render("signup.html",array(
					"title"=>"SignUp",
					"error"=>"User exists"
				)) ;
			}
			else
			{
				echo $this->twig->render("login.html",array(
					"title"=>"Login",
					"error"=>"SignUp Success"
				)) ;
			}		
		}
    }
?>