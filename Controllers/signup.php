<?php
    require './Views/signup.view.php';
    require './Model/connection.php';
    if(isset($_POST["submit"])){
        $name = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $admin = (isset($_POST["admin"])) ? 1 : 0;
        $rows = $conn->query("INSERT INTO `users` (`name`,`email`,`password`,`userpm`) VALUES ('$name', '$email', '$password', '$admin');");
        header("Refresh:0 ;url=/");
    }
?>