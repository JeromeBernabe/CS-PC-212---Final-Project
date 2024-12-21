<div id = 'navbar'>
    <?php if((isset($_SESSION["admin"])) and ($_SESSION["admin"] == "1")) :?>
    <a href = '/authadditem' id = "logo">
        <button class = "button">Additem</button>
    </a>
    <?php else:?>
    <a href = '/' id = "logo">
        <button class = "button">POP KULTURE</button>
    </a>
    <?php endif;?>
    <div class = "section">
        <?php if((isset($_SESSION["admin"])) and ($_SESSION["admin"] == "1")) :?>
            <a href = "/authlist" class = "right"><button class = "button" name = "shop">Authlist</button></a>
        <?php else:?>
            <a href = "/shop" class = "right"><button class = "button" name = "shop">Shop</button></a> 
        <?php endif;?> 
        <?php if (!isset($_SESSION["user"])): ?>
            <a href = "/login" class = "right"><button class = "button" name = "login">Login</button></a>
            <a href = "/signup" class = "right"><button class = "button" name = "signup">Sign Up</button></a>
        <?php else: ?>
            <a href = "/cart" class = "right"><button class = "button" name = "login"><?php echo $_SESSION["user"]?></button></a>
            <form action = "/login" method = "POST" id = "logout">
                <button class = "button" name = "logout">Log Out</button>
            </form>
        <?php endif;?>
    </div>
</div>
