<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>
<div class="changeCSS">
    <form
        action="index.php?action=createNewUser"
        method="POST"
    >

        <h1>Create a new user account</h1>

        <p>
            <label> Username:  </label>
            <input type="text" name="email">
        </p>

        <br>

        <p>
            <label> Password: </label>
            <input type="password" name="password">
        </p>

        <br>

        <p>
            <label>Profile Picture (Please input image Path):</label>
            <input type="text" name="imageSrc">
        </p>

        <br>

        <br><br>

        <input type="submit" value="Create New User">

    </form>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';
?>