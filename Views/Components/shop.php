<?php if(isset($_POST["Add"])):?>
    <div class = "first container">       
        <h1 class = "textcentered">Item added to <?= $_SESSION["user"]?>'s cart</h1>
    </div>
    <div class = "container">
<?php else:?>
    <div class = "first container">
<?php endif;?>
    <?php
        require './Model/connection.php';

        $stmt = $conn->query("SELECT * FROM `products`");
        $rows = $stmt->fetch_all(MYSQLI_ASSOC);
        
        foreach ($rows as $data):
    ?>
    <div class = "products">
        <h1><?= $data["productname"]?></h1>
        <img class = "img" src="../Images/<?=$data["image"]?>" alt=>
        <p>Price : ₱<?= $data["price"]?></p>
        <p>Quantity : <?= $quantity = ($data["quantity"] == 0) ? "Sold Out" : $data["quantity"]?></p>
        <form method="POST" action="/shop">
            <div class = "buttonsection">
                <button class = "button" id = "option" name = "Buy" value = "<?=$data["productId"]?>">Buy</button>
                <button class = "button" id = "option" name = "Add" value = "<?=$data["productId"]?>">Add</button>
            </div>
        </p>
        </form>
    </div>
    <?php endforeach ?>
</div>
