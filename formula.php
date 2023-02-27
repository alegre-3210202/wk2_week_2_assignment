<h1>Formula of Temperature</h1>
<?php
function convertTemperature($value, $unit) {
	if ($unit == 'F') {
		$result = ($value - 32) * 5/9;
		return $result . '°C';
	} elseif ($unit == 'C') {
		$result = ($value * 9/5) + 32;
		return $result . '°F';
	} else {
		return 'Invalid unit. Please use "F" for Fahrenheit or "C" for Celsius.';
	}
}
?>
<hr>
<hr>
<?php
echo "Fahrenheit to Celcius: ";
?>
<hr>
<hr>
<?php
echo convertTemperature(68,'F');
?>
<hr>
<hr>
<?php
echo "Celcius to Fahrenheit:";
?>
<hr>
<hr>
<?php
echo convertTemperature(30,'C');
?>
<hr>
<hr>
