<?php
    require './Views/authlist.view.php';
    require './Model/connection.php'; 
    require 'function.php';

    if(isset($_POST["Delete"])){
        $id = $_POST["Delete"];
        $stmt = $conn->query("DELETE FROM `products` WHERE `products`.`productId`=$id");
        header('Refresh:0');
    }

    if(isset($_POST["Modify"])){
        header("Location:/addquantity");
    }
?>

