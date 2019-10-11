<?php
	include 'weatherProvider.php';
	include 'unitConverter.php';
	include 'databox.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>	
	</head>
	
	<body>
		<form action="index.php" method="post">
			<input type="text" name="city" placeholder="City name">
			<select name="units">
				<option value="Celzije">Stopinje celzija</option>
				<option value="Fahrenheit">Fahrenheit</option>
				<option value="Kelvin">Kelvin</option>
			</select>
			<button	type="submit" name="submit">OK</button>
		</form>

		<?php

		// If we pushed submit button and we filled input with a city 
		
		if (isset($_POST['submit'])) {
			$chosenUnits = $_POST['units'];
			if($_POST['city'] == null){
				echo "write in city";
			}else{

				// Save our chosen city and units into variables

				$cityTemp = $_POST['city'];
				$tempUnits = $_POST['units'];

				// Send API url with chosen city into curlQuery function
						
				$object1 = new WeatherProvider;
				$object1->url = "http://api.openweathermap.org/data/2.5/weather?q=".$cityTemp."&APPID=45a061e09f539039792363c627f24742&units=metric";
				$object1->curlQuery($object1->url);
				$object3 = new Databox;

				// Depends on our choice echo out our city and current temperature and send data to pushData function
				
				if($_POST['units'] == "Celzije"){
					echo $cityTemp;
					echo "<br>";
					echo $object1->currentTime." stopinj celzija";
					$object3->pushData($tempUnits, $object1->currentTime, $cityTemp);
				}else if($_POST['units'] == "Fahrenheit"){
					$object2 = new UnitConverter;
					$object2->units = $object1->currentTime;
					$object2->fahrenheitFunction($object2->units);
					echo $cityTemp;
					echo "<br>";
					echo $object2->currentTemp." fahrenheit";
					$object3->pushData($tempUnits, $object2->currentTemp, $cityTemp);
				}
				else if($_POST['units'] == "Kelvin"){
					$object2 = new UnitConverter;
					$object2->units = $object1->currentTime;
					$object2->kelvinFunction($object2->units);
					echo $cityTemp;
					echo "<br>";
					echo $object2->currentTemp." kelvin";
					$object3->pushData($tempUnits, $object2->currentTemp, $cityTemp);
				}
			}
		}


		?>

	</body>

</html>
