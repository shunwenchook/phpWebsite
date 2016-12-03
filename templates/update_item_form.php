<?php
//-------- page header -------------------
$pageTitle = 'update form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>
<div class="changeCSS">
    <form
        action="index.php?action=updateProduct"
        method="POST"
    >
        <h1>Update product</h1>

        <!-- ****** send ID, but don't let user see this ***** -->
        <input type="hidden" name="id" value="<?= $item['itemID'] ?>">
        <p>
            <label>Item Name:</label>
            <input type="text" name="itemName" value="<?= $item['itemName'] ?>">
        </p>
        <br>

        <p>
            <label>Image Source:</label>
            <input type="text" name="imageSrc" value="<?= $item['imageSrc'] ?>">
        </p>
        <br>

        <p>
            <label>Price:</label>
            <input type="text" name="price" value="<?= $item['price'] ?>">
        </p>
        <br>

        <p>
            <label>Description:</label>
            <input type="text" name="description" value="<?= $item['description'] ?>">
        </p>
        <br>

        <p>
            <label>Category:</label>
            <input type="text" name="category" value="<?= $item['category'] ?>">
        </p>
        <br><br>

        <input type="submit" value="Update Product">

    </form>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';

?>