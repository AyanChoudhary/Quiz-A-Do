<?php

    namespace Controllers;
    use Models\Session;
    use Models\Admin;
    use Models\Users;

    class AdminController
    {
        protected $twig;

        public function __construct()
        {
            $loader = new \Twig_Loader_Filesystem(__DIR__."/../views");
            $this->twig = new \Twig_Environment($loader);
        }

        public function get()
        {
            session_start();
            Session::sess_check_admin();
            $question = Users::show_questions();
            echo $this->twig->render("admin.html",
            array(
                "title" => "Admin",
                "username" => $_SESSION['username'],
                "question" => $question
            ));
        }

        public function post()
        {
            session_start();
            $question = $_POST['ques'];
            $answer = $_POST['ans'];
            $points = $_POST['points'];
            $option1 = $_POST['opt1'];
            $option2 = $_POST['opt2'];
            $option3 = $_POST['opt3'];
            $option4 = $_POST['opt4'];

            Admin::question_upload($points, $question, $answer, $option1, $option2, $option3, $option4);

            $question = Users::show_questions();
            echo $this->twig->render("admin.html",
            array(
                "title" => "Admin",
                "username" => $_SESSION['username'],
                "question" => $question
            ));
        }
    }
?>