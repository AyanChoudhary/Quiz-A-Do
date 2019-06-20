<?php

    require_once __DIR__."/../vendor/autoload.php";
    session_start();
    Toro::serve(array(
        "/" => "Controllers\\HomeController",
        "/login" => "Controllers\\LoginController",
        "/signup" => "Controllers\\SignUpController",
        "/admin" => "Controllers\\AdminController",
        "/user" => "Controllers\\UserController",
        "/logout" => "Controllers\\LogoutController",
        "/leaderboard" => "Controllers\\LeaderboardController",
        "/questions" => "Controllers\\QuestionController",
        "/customLeaderboard" => "Controllers\\CustomLeaderboardController"
    ))
?>