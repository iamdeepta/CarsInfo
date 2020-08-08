<?php
include 'db.php';
if (isset($_POST['delete'])) {

	$msg = $_GET['msg'];
	
	$remove_status = 1;
	

        $remove_query = "UPDATE carsinfo
                 SET remove_status = '{$remove_status}'
        
                     WHERE id = $msg " ;



 		$remove = $connect->prepare($remove_query);
		$remove->execute();


		header("Location: index.php");
 } 


 if (isset($_POST['up'])) {

	$msg1 = $_GET['msg'];

	$manufacturer = $_POST['manufacturer'];
	$model = $_POST['model'];
	$year = $_POST['year'];
	$producing_country = $_POST['producing_country'];
	$quantity = $_POST['quantity'];
	
	

        $update_query = "UPDATE carsinfo
                 SET manufacturer = '{$manufacturer}',
                 	 model = '{$model}',
                 	 year = '{$year}',
                 	 producing_country = '{$producing_country}',
                 	 quantity = '{$quantity}'
        
                     WHERE id = $msg1 " ;



 		$update = $connect->prepare($update_query);
		$update->execute();


		header("Location: index.php");
 }
?>