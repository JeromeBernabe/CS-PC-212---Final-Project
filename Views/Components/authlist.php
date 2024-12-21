<div class = "first container">
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
            <div class = "buttonsection">
                <form method="POST" action = "/authlist" id = "formbutton">
                    <button class = "button" id = "option" name = "Delete" value = "<?= $data["productId"]?>">
                        Delete
                    </button>
                </form>
                <form method="POST" action = "/addquantity" id = "formbutton">
                    <button class = "button" id = "option" name = "Modify" value = "<?= $data["productId"]?>">
                        Edit
                    </button>
                </form>
                
            </div>
    </div>
    <?php endforeach ?>
</div>