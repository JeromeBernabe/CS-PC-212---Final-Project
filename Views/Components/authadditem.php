
<div class = "first container">
    <div id = "login">
        <?php if (isset($_POST["submit"])):?>
            <div id = "login">
                <h1 class = "textcentered">Item Successfully Added</h1 class = "textcentered">
            </div>
        <?php endif;?>
        <form method = "post" enctype="multipart/form-data">
            <h1>Add Item</h1>
            <label for="productname">Product Name</label>
            <input type="text" class = "inputfield" name = "productname" required>
            <label for="quantity" >Quantity</label>
            <input type="text" class = "inputfield" name = "quantity" required>
            <label for="price" >Price</label>
            <input type="text" class = "inputfield" name = "price" required>
            <label for="image">Image</label>
            <input type="file" name="file" id = "choose" required>
            <button id = "submit" name = "submit">Submit</button>
        </form>
    </div>
</div>


