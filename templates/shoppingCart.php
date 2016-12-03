<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<div class="changeCSS">
    <div class="blockA">
        <h1> Shopping Cart </h1>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>sub-total</th>
                <th>(remove)</th>
            </tr>
            <?php
            //-----------------------------
            $total = 0;

            foreach($shoppingCart as $id=>$quantity):
                $connection = connect_to_db();

                $product = get_one_item($connection, $id);
                $price = $product['price'];
                $subTotal = $price * $quantity;
                $total += $subTotal;

//-----------------------------
                ?>
                <tr>
                    <td><?= $product['itemName'] ?></td>
                    <td>&euro; <?= $price ?></td>
                    <td><?= $quantity ?></td>
                    <td><?= $subTotal ?></td>

                    <td><a href="index.php?action=removeFromCart&id=<?= $product[0] ?>">(remove from cart)</a></td>

                </tr>

                <?php
//-----------------------------
            endforeach;
            //-----------------------------
            ?>

            <tr>
                <td colspan="3">Total</td>
                <td>&euro; <?= $total ?></td>
            </tr>

        </table>
    </div>
</div>

<?php

require_once __DIR__.'/../templates/_footer.php';
?>