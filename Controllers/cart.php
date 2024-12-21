<?php
    require './Views/cart.view.php';
    require './Model/connection.php';

    if(isset($_POST["Delete"])){
        $id = $_SESSION["Id"];
        $value = $_POST["Delete"];
        $stmt = $conn->query("DELETE FROM `cartitems` WHERE `cartitems`.`Id`=$id  AND `cartitems`.`cartId`=$value;");
        header('Refresh:0');
    }

    if(isset($_POST["Buy"])){
        $aid = $_POST["Buy"];
        $id = $_SESSION["Id"];
        
        $find = $conn->query("SELECT `productId` FROM `cartitems` WHERE `cartitems`.`cartId` = $aid");
        $findarray = $find->fetch_assoc();
        $findPId = $findarray["productId"];
        
        $quantity = $conn->query("SELECT * FROM `products` WHERE `products`.`productId` = $findPId");
        $quantity = $quantity->fetch_assoc();
        
        if($quantity["quantity"] != 0){
            $quantity = $quantity["quantity"] - 1;
            $query = $conn->query("UPDATE `products` SET `quantity` = $quantity WHERE `products`.`productId` = $findPId");
            $stmt = $conn->query("DELETE FROM `cartitems` WHERE `cartitems`.`cartId` = $aid");    
        }
        
        header("Refresh:0");
    }
?>
