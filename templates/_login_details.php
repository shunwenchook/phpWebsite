
<!-- login / logout -->
<?php
//----------------------------
if($isLoggedIn):
//----------------------------
?>
    <div class="loginSection">
        <?php
        if ( $isLoggedIn && $isAdmin != true) {
        ?>

        <a href="/index.php?action=showShoppingCart">
            <img border="0" alt="W3Schools" src="images/cart.png" width="50" height="50">
        </a>

        <?php } ?>

        <br>
        You are logged in as: <strong><?= $username ?></strong>
        <br>
        <a href="/index.php?action=logout">(Logout)</a>
    </div>

<?php
//----------------------------
else:
//----------------------------
?>
    <div class="loginSection">
        <a href="/index.php?action=login">Login</a>
    </div>
<?php
//----------------------------
endif;
//----------------------------
?>
