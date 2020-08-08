<?php
include 'db.php';
if (isset($_POST['insert'])) {

	$manufacturer = $_POST['manufacturer'];
	$model = $_POST['model'];
	$year = $_POST['year'];
	$producing_country = $_POST['producing_country'];
	$quantity = $_POST['quantity'];

 	
 	$insert_query = "INSERT INTO carsinfo
 						SET 	
 							`manufacturer` = '{$manufacturer}',
 							`model` = '{$model}',
 							`year` = '{$year}',
 							`producing_country` = '{$producing_country}',
 							`quantity` = '{$quantity}'

 							";



 		$insert = $connect->prepare($insert_query);
		$insert->execute();

		$msg = "Car information has been created successfully!";


		header("Location: index.php?msg=".$msg);
 } 
?>