
<div class = "first container">
    <?php
        require './Model/connection.php';
        require './Controllers/function.php';
        $stmt = $conn->query("SELECT * FROM `products` INNER JOIN `cartitems` ON `cartitems`.`productId` = `products`.`productId`;");
        $rows = $stmt->fetch_all(MYSQLI_ASSOC);
        $newrow = array();

        foreach ($rows as $true){
            if($true["Id"] == $_SESSION["Id"]){
                array_push($newrow,$true);
            }
        }
    ?>
        
    <?php if(!$newrow): ?>
        <p class="textcentered">You have no items in your cart</p>
    <?php else: ?>
        <?php foreach ($newrow as $data):?>
            <div class = "products">
                <h1><?=$data["productname"]?></h1>
                <img class = "img" src="../Images/<?=$data["image"]?>" alt=>
                <p>Price : ₱<?= $data["price"]?></p>
                <p>Quantity : <?= $quantity = ($data["quantity"] == 0) ? "Sold Out" : $data["quantity"]?></p>
                <form method="POST" action="/cart">
                    <div class = "buttonsection">
                        <button class = "button" id = "option" name = "Delete" value = "<?=$data["cartId"]?>">Delete</button>
                        <button class = "button" id = "option" name = "Buy" value = "<?=$data["cartId"]?>">Buy</button>
                    </div>
                </form>
            </div>
        <?php endforeach;?>
    <?php endif;?>
        
    
    
   
</div>