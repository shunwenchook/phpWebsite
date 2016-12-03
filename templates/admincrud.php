<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<body>

<div class="changeCSS">
	<form action = "index.php" method="get">
		<table>
			<tr>
				<th>(detail)</th>
				<th> Item ID </th>
				<th> Item Name </th>
				<th> Picture </th>
				<th> Price </th>
				<th> Description </th>
				<th> Category </th>
				<th>(update)</th>
				<th>(delete)</th>
			</tr>

			<?php
			$counter=0;

			foreach ($items as $item){
				if($counter%2==0){
					$evenOdd = "even";
				} else {
					$evenOdd = "odd";
				}
				?>
				<tr class ="<?= $evenOdd ?>">
					<td>
						<a href="index.php?action=detail&id=<?= $item['itemID'] ?>"> (detail page)</a>
					</td>
					<td>
						<?= $item['itemID'] ?>
					</td>
					<td>
						<?= $item['itemName'] ?>
					</td>

					<td>
						<img src="<?= $item['imageSrc'] ?>" class= "images" alt="Soundtrack">
					</td>
					<td>
						<?= $item['price'] ?>
					</td>
					<td>
						<?= $item['description'] ?>
					</td>
					<td>
						<?= $item['category'] ?>
					</td>
					<td>
						<a href="index.php?action=showUpdateProductForm&id=<?= $item['itemID'] ?>">
							(UPDATE)</a>
					</td>
					<td>
						<a href="index.php?action=delete&id=<?= $item['itemID'] ?>">
							(DELETE)</a>
					</td>
				</tr>
				<?php
				$counter++;
			}
			?>
			<!--
			<tr class ="odd">
				<td> <img src = "images/towel.jpg" width = "200" height="200" alt ="Towel" > </td>
				<td> &euro; 1 </td>
				<td> <strong> Towels </strong> </td>
				<td> <input type="text" id="towelInput"> </td>
			</tr>
			-->
		</table>

		<br><br>

		<input type="hidden" name="action" value="showNewProductForm">
		<input type="submit" id="submit"value="Create New Product">

	</form>
</div>

<?php
require_once __DIR__.'/../templates/_footer.php';

?>
</body>



</html>