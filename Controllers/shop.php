<?php
    require './Model/connection.php';
    require './Views/shop.view.php';
    
    require 'function.php';
    
    if(isset($_POST["Add"])){
        if(!isset($_SESSION["Id"])){
            header("Location:/login");
        }
        else{
            $aid = $_POST["Add"];
            $id = $_SESSION["Id"];
            $stmt = $conn->query("INSERT INTO `cartitems`(productId,Id) VALUES ('$aid','$id');");
        }
    }

    if(isset($_POST["Buy"])){
        if(!isset($_SESSION["Id"])){
            header("Location:/login");
        }
        else{
            $aid = $_POST["Buy"];
            $id = $_SESSION["Id"];
            $row = $conn->query("SELECT `quantity` FROM `products` WHERE `products`.`productId` = $aid");
            $quantity = $row->fetch_assoc();
            if($quantity["quantity"] == 0){
                header("Refresh:0");
            }
            else{
                $quantity = $quantity["quantity"] - 1;
                $stmt2 = $conn->query("UPDATE `products` SET `quantity`=$quantity WHERE `products`.`productId` = $aid");
            }
            header("Refresh:0");
        }
    }
?>

