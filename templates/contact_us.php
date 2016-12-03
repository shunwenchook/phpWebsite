<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<body>
<div class="changeCSS">

	<form onSubmit= "alertA()" method="post">
		<fieldset>
		<legend> Contact Us </legend>
			<label for="email"> Your email: </label>
			<input type="text" size="20" maxlength="20" name="email" id = "email" required placeholder="Enter your email">
			<br>
			<br>
			<label for="email"> Your message: </label>
			<textarea rows="10" cols="50"  name="message" id = "textarea"></textarea>
			<br>
			<br>

			<label for="email"> What is your concern? </label>
			<select name="dropbox" size ="1">
				<option value="Facilities"> Facilities </option>
				<option value="Staff"> Staff </option>
				<option value="Environment"> Environment </option>
				<option value="Purchases"> Purchases </option>
				<option value="other"> Others </option>
			</select>
			<br>
			<br>
			<label > Priority: </label>
			<input type="range" name="priority">
			<br> <br>
		</fieldset>
		<br>

		<div class = "buttons">
			<input type = "submit" name = "submit" id = "submit" value = "Send">
			<input type = "reset" name = "reset" id = "reset" value = "Reset">
		</div>
	</form>
</div>
	<?php
	require_once __DIR__.'/../templates/_footer.php';

	?>

</body>




</html>