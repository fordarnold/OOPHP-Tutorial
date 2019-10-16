<?php

// Report PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// https://www.youtube.com/watch?v=0OOAdIdQvX4&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=11

/**
 * 
 */
class Weather
{
	// public $tempConditions = ['cold', 'mild', 'warm'];
	public static $tempConditions = ['cold', 'mild', 'warm'];
	
	public static function celciusToFarenheit($c)
	{
		return $c * 9 / 5 + 32;
	}

	public static function determineTempCondition($f)
	{
		if($f < 40) {
			// // won't work because $this refers to an instance of the class, 
			// // and we're not instantiating since we're using static properties and methods
			// return $this->tempConditions; 

			return self::$tempConditions[0];
		}
		else if($f < 70) {
			return self::$tempConditions[1];
		}
		else {
			return self::$tempConditions[2];
		}
	}
}

// // This is unnecessary for what is essentially a utility class
// $weatherInstance = new Weather();
// print_r($weatherInstance->tempConditions);

// using 'static' properties/methods
print_r(Weather::$tempConditions);
echo "<br />";
echo Weather::celciusToFarenheit(20);
echo "<br />";
echo Weather::determineTempCondition(80);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OOPHP Tutorial</title>
	</head>
	<body>
		
	</body>
</html>