<?php include 'db.php';
$msg = $_GET['msg'];
$query = "
SELECT * FROM carsinfo where id=$msg and remove_status=0 
";

$result = $connect->prepare($query);
$result->execute();
$statement = $result->fetchAll();

$query1 = "
SELECT * FROM carsinfo where remove_status=0 group by manufacturer
";

$result1 = $connect->prepare($query1);
$result1->execute();
$statement1 = $result1->fetchAll();

$manufacturer = array();
$quantity = array();
$id = array();
$color = array();

$count = 0;

foreach($statement1 as $stmt){
  
  $manufacturer[] = $stmt['manufacturer'];
  $quantity[] = $stmt['quantity'];
  $id[] = $stmt['id'];

   $count++;

   $color[] = 'rgba('.rand($count,rand(1,$count+400)).', '.rand($count+2*2,rand($count,500)).', '.rand(1,rand(100,500)).', 0.7)';


}



?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cars Information</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    
  <script type="text/javascript" src="includes/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>


    <?php include 'css_master.php';?>

  </head>
  <body>
    <br />
    <div class="container">
      <h3 align="center">Cars Information</h3>
      <br />
      <div class="card">
        <div class="card-header">Cars Info</div>
        <div class="card-body" style="background-color: #F9F9F3">
        	<div class="row">
        	<div class="form-group" style="margin-left: 15px;">
        		<form action="index.php" method="post">
          <button type="submit" name="add" class="btn btn-primary">Create</button>
      </form>
      </div>
      <div class="row" style="margin-left: 20px;">
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <p>Upload CSV File:<input type="file" name="file" required>
          <button type="submit" name="upload" class="btn btn-success" >Upload</button></p>
          </form>
        </div>
    </div>

    <div class="container" style="height: 350px;width: 720px;">
    <canvas id="myChart"></canvas>
  </div>

  <?php include 'chart_js.php';?>

          <div class="form-group table-responsive">
            <table class="table table-bordered">
              <thead>
                <form action="update_remove.php?msg=<?=$msg?>" method="post">
                <tr>
                <th>Manufacturer</th>
                <th>Model</th>
                <th>Year</th>
                <th>Producing Country</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
              </thead>

              <?php foreach($statement as $update){?>
              <tr>

              <td><input class="form-control" type="text" name="manufacturer" value="<?=$update['manufacturer']?>" required></td>
              <td><input class="form-control" type="text" name="model" value="<?=$update['model']?>" required></td>
              <td><input class="form-control" type="number" min="1900" max="2020" step="1" name="year" value="<?=$update['year']?>" required></td>
              <td><input class="form-control" type="text" name="producing_country" value="<?=$update['producing_country']?>" required></td>
              <td><input class="form-control" type="number" name="quantity" value="<?=$update['quantity']?>" required></td>

              <td><button type="submit" name="up[]" id="up" class="btn btn-success">Update</button></td>
            </tr>
        <?php }?>
          </form>
            </table>
          </div>

          
          <div class="form-group autocomplete">
            <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search" />
          </div>
          
   
          <!-- <div id="livesearch"></div> -->
          
          <div class="table-responsive" id="dynamic_content">
            
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

<?php include 'pagination_js.php';?>

<?php include 'autocomplete.php';?>

