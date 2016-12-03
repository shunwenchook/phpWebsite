
<?php
require_once __DIR__ . '/../templates/_header.php';
?>
<div class="changeCSS">

    <div class="blockA">
        <h1> Details of one product</h1>

        <dl>
            <dt><h2>Item Name</h2></dt>
            <dd><?= $item['itemName'] ?></dd>

            <dt><h2>Image </h2></h2></dt>
            <dd>
                <img src="<?= $item['imageSrc'] ?>" class= "images" alt="">
            </dd>

            <dt><h2>Price</h2></dt>
            <dd>&euro;<?= $item['price'] ?></dd>

            <dt><h2>Description</h2></dt>
            <dd><?= $item['description'] ?></dd>

            <dt><h2>Category</h2></dt>
            <dd><?= $item['category'] ?></dd>
        </dl>

    </div>
</div>



<?php
require_once __DIR__.'/../templates/_footer.php';

?>