<?php
require_once __DIR__ . '/../templates/_header.php';
?>
<div class="changeCSS">
    <div class="blockA">
        <h1>Successful Login</h1>
            <img src="<?= $userImage[0] ?>" class= "images" alt="">


        <p>
            Welcome back <?= $username ?>, you have successfully logged in to the system.
        </p>
    </div>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';
?>