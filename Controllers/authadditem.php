<?php
    require './Views/additem.view.php';
    require './Model/connection.php';
    require 'function.php';

    if(isset($_POST["submit"])){
        $name = $_POST["productname"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $image = $_FILES["file"]["name"];
        $stmt = $conn->query("INSERT INTO `products` (`productname`,`quantity`,`image`,`price`) VALUES ('$name','$quantity','$image','$price');");
        move_uploaded_file($_FILES["file"]["tmp_name"], "Images/" . $_FILES["file"]["name"]);
    }

?>

