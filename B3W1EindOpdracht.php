<!DOCTYPE html>
<html>
<head>
	<title>B3W1 EindOpdracht</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
 
		<style>
    		<?php 
         		include 'css/style.css'; 
    		?>
		</style>

		<?php
		date_default_timezone_set("Europe/Amsterdam");

		$image = '';   
		$t = date("H:i");

		if ($t < "12:00") {
			echo "goedemorgen ";
			$image = 'images/morning.png';
			
		} elseif ($t < "18:00") {
		    echo "goedermiddag ";
		    $image = 'images/afternoon.png';

		} elseif ($t < "24:00") {
			echo "goedeavond ";
			$image = 'images/evening.png';

		} else {
			 echo "goedenacht!";
			 $image = 'images/night.png';
			}	

   		 echo "het is nu " . date("H:i");

	?>
	<body style="background-image:url('<?php echo $image; ?>')">
</body>
</html>