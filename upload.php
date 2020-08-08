<?php
//$connect = mysqli_connect("localhost", "root", "", "cars");
include 'db.php';
if(isset($_POST["upload"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
                $item1 = $data[0];  
                $item2 = $data[1];
                $item3 = $data[2];
                $item4 = $data[3];
                $item5 = $data[4];
                $query = "INSERT into carsinfo(manufacturer, model, year, producing_country, quantity) values('$item1','$item2','$item3','$item4','$item5')";
                //mysqli_query($connect, $query);

                $upload = $connect->prepare($query);
                $upload->execute();
   }
   fclose($handle);
   
   $msg = "The file has been uploaded successfully!";
   header("Location: index.php?msg=".$msg);
  }else{

    $msg = "Please upload a csv file!";
   header("Location: index.php?msg_error=".$msg);
  }
 }
}