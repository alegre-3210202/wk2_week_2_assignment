<!DOCTYPE html>
<html>
<head>
	<title>Assignment: A Temperature Converter</title>
</head>
<body>
	<h1>A Temperature Converter</h1>
	<hr>
	<hr>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h2><br><label for="temp">Enter a Temperature:</label></br></h2>
		<input type="number" id="temp" name="temp" required>
		<select id="convert" name="convert" required>
			<option value="f2c">Fahrenheit to Celsius</option>
			<option value="c2f">Celsius to Fahrenheit</option>
		</select>
		<button type="submit" name="submit">Convert</button>
	</form>

	<?php
	
	if(isset($_POST['submit'])) {
	
		$temp = $_POST['temp'];
		$convert = $_POST['convert'];

		if($convert == 'f2c') {
			$celsius = ($temp - 32) * 5 / 9;
			echo "<p>$temp &deg;F is $celsius &deg;C</p>";
		}
		elseif($convert == 'c2f') {
			$fahrenheit = $temp * 9 / 5 + 32;
			echo "<p>$temp &deg;C is $fahrenheit &deg;F</p>";
		}
	}
	?>
	<hr>
	<hr>
</body>
</html>