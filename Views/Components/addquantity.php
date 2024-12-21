<div class = "first container">
    <div id = "login">
        <h1>Add quantity</h1>
        <?php
            require './Model/connection.php';
            $productId = $_POST["Modify"];
            $stmt = $conn->query("SELECT `productId`,`image` FROM `products` WHERE `products`.`productId` = $productId");
            $data = $stmt->fetch_assoc();
        ?>
        <img src="Images/<?=$data["image"]?>" alt="">
        <form method = "POST" id = "option">
            <label for="quantity">Quantity</label>
            <input type="text" class = "inputfield" name="quantity">
            <label for = "price">Price</label>
            <input type="text" class = "inputfield" name="price">
            <button class = "button" id = "addquantity" name = "submit" value = "<?=$data["productId"]?>">Add</button>
        </form>
    </div>
</div>