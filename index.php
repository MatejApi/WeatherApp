<?php
	include 'weatherProvider.php';
	include 'unitConverter.php';
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
			</select>
			<button	type="submit" name="submit">OK</button>
		</form>

		<?php
		
		if (isset($_POST['submit'])) {
			$units = $_POST['units'];
			if($_POST['city'] == null){
				echo "write in city";
			}
			else if($_POST['city'] != null && $_POST['units'] == "Celzije"){			
				$city = $_POST['city'];
				
		
				$object1 = new WeatherProvider;
				$object1->url = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&APPID=45a061e09f539039792363c627f24742&units=metric";
				$object1->curlQuery($object1->url);

				
			}
			else if($_POST['city'] != null && $_POST['units'] == "Fahrenheit"){
				$object2 = new UnitConverter;
				$object2->tryMe();
			}

		}

		

		// $staticJson = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Ptuj&APPID=45a061e09f539039792363c627f24742&units=metric");
		// $staticObj = json_decode($staticJson);
		// echo $staticObj->main->temp;
		
		// $weatherTemp = new WeatherProvider();
		// echo $weatherTemp;

		?>

	</body>

</html>
