<?php
require_once __DIR__ . '/../templates/_header.php';
?>
<div class="changeCSS">
    <form
        action="/index.php?action=processLogin"
        method="post"
    >


        <label> Username: </label>
        <input type="text" size="20" maxlength="30" name="username" id = "email" autofocus>
        <br>
        <br>


        <label> Password: </label>
        <input type="password" size="20" maxlength="20" name="password" id = "email">
        <br>
        <br>

        <input type="submit" id="submit" value="Login">

        <a href="index.php?action=showNewUserForm" class="createButton"> Create new User</a>
    </form>
<div>

<?php
require_once __DIR__.'/../templates/_footer.php';
?>