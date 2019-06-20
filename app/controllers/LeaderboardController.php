<?php

    namespace Controllers;
    use Models\Leaderboard;
    use Models\Session;

    class LeaderboardController
    {
        protected $twig;

        public function __construct()
        {
            $loader = new \Twig_Loader_Filesystem(__DIR__."/../views");
            $this->twig = new \Twig_Environment($loader);
        }

        public function get()
        {
            Session::sess_check_user();
            $user_id = $_SESSION['usr_id'];
            $users = Leaderboard::display_results();
            echo $this->twig->render("leaderboard.html",
            array(
                "title" => "Leaderboard",
                "users" => $users

            ));
            
        }

        public function post()
        {
            $users = Leaderboard::display_results();
            echo $this->twig->render("leaderboard.html",
            array(
                "title" => "Leaderboard",
                "users" => $users

            ));
        }
    }
?>