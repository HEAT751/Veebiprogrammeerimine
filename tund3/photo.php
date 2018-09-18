<?php
	$firstName = "Karl";
	$lastName = "Mülla";
	//loeme kataloogi sisu
	$dirToRead = "../../pics/";
	$allFiles = scandir($dirToRead);
	//var_dump($allFiles, 2);
	$picFiles = array_slice($allFiles, 2);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>
	<?php
	echo $firstName;
	echo " ";
	echo $lastName;
	?>
	</title>
</head>
<body>
<h1>
	<?php
		echo $firstName ." " .$lastName;
		?></h1>
	<p>See veebileht on testimise eesmärgil</p>
	<p>uus leht <a href="page.php">PAGE</a> page</p>
	<?php
		//<img src="pilt.jpg" alt="pilt">
		
		for($i =0; $i < count($picFiles); $i++){
			echo '<img src="' .$dirToRead .$picFiles[$i] .'" alt="pilt">';
		}	
		?>
</body>
</html>

	