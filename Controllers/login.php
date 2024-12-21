<?php
    require './Views/login.view.php';
    require './Model/connection.php';
    require 'function.php';

    $stmt = $conn->query("SELECT * FROM `users`");
    $found = false;
    if(isset($_POST["submit"])){
        foreach($stmt->fetch_all(MYSQLI_ASSOC) as $data){
            if($_POST["email"] == $data["email"]
                and $_POST["password"] == $data["password"]){
                $found = true;
                $_SESSION["Id"] = $data["Id"];
                $_SESSION["user"] = $data["name"];
                $_SESSION["admin"] = $data["userpm"]; 
                header("Refresh:0 ;url=/");
            }
        }
        if($found == false){
            $message = "User Not Found";
            echo "<script>alert('$message');</script>";
        }
    }

    if(isset($_POST["logout"])){
        session_unset();
        header("Refresh:0 ;url=/");
    }

    
?>