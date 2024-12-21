<?php
    require './Model/connection.php';
    
    if(isset($_POST["submit"])){
        $productId = $_POST["submit"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $stmt = $conn->query("UPDATE `products` SET `quantity` = '$quantity',`price` = '$price' WHERE `products`.`productId` = '$productId'");
        header("Location:/authlist");    
    }
    
    require './Views/addquantity.view.php';
     
    
       
?>