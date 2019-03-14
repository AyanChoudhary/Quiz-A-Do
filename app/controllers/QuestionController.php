<?php

    namespace Controllers;
    use Models\Users;

    class QuestionController
    {
        protected $twig;

        public function __construct()
        {
            $loader = new \Twig_Loader_Filesystem(__DIR__."/../views");
            $this->twig = new \Twig_Environment($loader);
        }

        public function get()
        {
            $question = Users::show_questions();
            $user_id = $_SESSION['usr_id'];
            $solved = $_SESSION['solved'];

            echo $this->twig->render("questions.html",
            array(
                "title" => "Questions",
                "question" => $question,
                "user_id" => $user_id,
                "solved" => $solved
            ));
            
        }

        public function post()
        {
            $question = Users::show_questions();
            $user_id = $_SESSION['usr_id'];
            $solved = $_SESSION['solved'];

            echo $this->twig->render("questions.html",
            array(
                "title" => "Questions",
                "question" => $question,
                "user_id" => $user_id,
                "solved" => $solved
            ));
        }
    }
?>