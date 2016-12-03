
<?php
require_once __DIR__ . '/../templates/_header.php';

?>
<div class="changeCSS">
    <form
        action="index.php?action=changePicture"
        method="POST"
    >
        <h1>User Settings</h1>
        <p>
            <img src="<?= $userImage[0] ?>" class= "images" alt="">
            <br><br>

            <label>Change Profile Picture (Insert Image Path):</label>
            <br><br>
            <input type="text" name="imageSrc">
            <br>
        </p>
        <input type="submit" value="Submit">
        <br><br>

        <a href="/index.php?action=setBackgroundColorBlue"  class="createButton">Set background to Blue</a>
        <a href="/index.php?action=setBackgroundColorBlack"  class="createButton">Set background to Black</a>
        <br><br>
        <a href="/index.php?action=sizeOnePointFive" class="createButton">Text size = 1.5rem</a>
        <a href="/index.php?action=sizeTwo" class="createButton">Text size = 2rem</a>


    </form>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';

?>