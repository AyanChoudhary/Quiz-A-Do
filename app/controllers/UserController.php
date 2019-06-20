<?php

    namespace Controllers;
    use Models\Users;
    use Models\Session;

    class UserController
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
            Session::sess_check_user();
            $question = Users::show_questions();
            $user_id = $_SESSION['usr_id'];
            $solved = $_SESSION['solved'];

            echo $this->twig->render("user.html",
            array(
                "title" => "User",
                "question" => $question,
                "user_id" => $user_id,
                "solved" => $solved
            ));
            
        }

        public function post()
        {
            session_start();
            $points = 0;
            $ids = preg_grep("/^id/", array_keys($_POST));

            foreach ($ids as $key => $id)
            {
                $usr_id = $_POST['usr_id'];
                $ans = $_POST[substr($id, 2)];
                $ques_id = substr($id, 2);
                $points = $points + Users::question_submit($ques_id, $ans);
            }

            Users::user_update($points);

            $_SESSION['solved'] = "1";

            header('Location: /leaderboard');

        }
    }
?>