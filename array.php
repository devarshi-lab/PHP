<?php
	if (isset($_POST['city']) && isset($_POST['month']) && isset($_POST['year']))
	 {
		$city = $_POST['city'];
		$month = $_POST['month'];
		$year = $_POST['year'];
 
		if (empty($city) === true || empty($month) === true || empty($year) === true)
		 {
			echo "Please fill out all the fields";
		 }
		else 
		{
 
 
			if (isset($_POST['weather']))
			 {
				$weather = $_POST['weather'];
				echo "In $city in the month of $month $year, you observed the following weather:";
				echo "<ul>";
					foreach ($weather as $value) 
					{		
						echo "<li>" . $value . "</li>";
					}
				echo "</ul>";
			exit();
			}
			else 
			{
				echo "Please choose what weather you are experiencing";
			}
		}
	}
?>
 
 
<!DOCTYPE html>
<head><title>Variable Data Types</title>
 
</head>
<body>
	<h4>Please fill out all the information needed.</h4>
	<form action = "" method = "POST">
		<label>City: <input type = "text" name = "city" /></label>
		<label>Month: <input type = "text" name = "month" /></label>
		<label>Year: <input type = "text" name = "year" /></label>
 
	<p>Please check what kind of weather you experienced from the list below.</p>
		<label><input type = "checkbox" name = "weather[]" value = "rain" />Rain</label></br>
		<label><input type = "checkbox" name = "weather[]" value = "sunshine" />Sunshine</label></br>
		<label><input type = "checkbox" name = "weather[]" value = "clouds"/>Clouds</label></br>
		<label><input type = "checkbox" name = "weather[]" value = "hail" />Hail</label></br>
		<label><input type = "checkbox" name = "weather[]" value = "sleet" />Sleet</label></br>
		<label><input type = "checkbox" name = "weather[]" value = "snow" />Snow</label></br>
		<label><input type = "checkbox" name = "weather[]" value = "wind" />Wind</label></br>
		<input type = "submit" value = "Submit" />
	</form>
 
</body>
</html>
