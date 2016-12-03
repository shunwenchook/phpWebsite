<?php
require_once __DIR__ . '/../templates/_header.php';
?>
<div class="changeCSS">

	<div class="blockA">
		<h1> Shop </h1>
		<?php
		foreach ($items as $item) {
			?>
			<aside class = "sectionA">

				<img src="<?= $item['imageSrc'] ?>" class="imageShop" alt="Soundtrack">
				<text class="textarea">

					<h2><?= $item['itemName'] ?> </h2>

					<ul>
						<li>
							&euro; <?= $item['price'] ?>
						</li>
					</ul>
					<br><br>
					<?php
					if ( $isLoggedIn && $isAdmin != true) {
					?>
						<a href="index.php?action=addToCart&id=<?= $item['itemID'] ?>" class="button">
							Add to cart</a>
					<?php
					}
					?>
					<a href="index.php?action=detail&id=<?= $item['itemID'] ?>" class="button"> Detail page</a>

				</text>
			</aside>
			<hr>
		<?php
		}
		?>

	</div>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';
?>