<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>
<div class="changeCSS">
    <form
        action="index.php?action=createNewProduct"
        method="POST"
    >

        <h1>Create a new product</h1>

        <p>
            <label> Item Name: </label>
            <input type="text" name="itemName">
        </p>

        <br>

        <p>
            <label> Item Source: </label>
            <input type="text" name="imageSrc">
        </p>

        <br>

        <p>
            <label>Price:</label>
            <input type="text" name="price">
        </p>

        <br>

        <p>
            <label>Description:</label>
            <input type="text" name="description">
        </p>

        <br>

        <p>
            <label>Category:</label>
            <input type="text" name="category">
        </p>

        <br><br>

        <input type="submit" value="Create New Product">

    </form>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';
?>