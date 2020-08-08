<?php include 'db.php';

$query = "
SELECT * FROM carsinfo where remove_status=0 
";

$result = $connect->prepare($query);
$result->execute();
$statement = $result->fetchAll();

$manufacturer = array();
$quantity = array();
$id = array();
$color = array();

$count = 0;
//$count = array();

foreach($statement as $stmt){
  
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


<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->

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

          <?php if(isset($_GET['msg'])){ ?>
          <div class="card">
          <div class="card-body" style="background-color: #DFF0D8; height: 50px;">
          <label style="margin-top:0px !important;color: green ">
            <?php 
          
              echo $_GET['msg'];
          
          ?>
            
          </label>
        </div>
      </div>

    <?php }

        ?>

        <?php if(isset($_GET['msg_error'])){ ?>
          <div class="card">
          <div class="card-body" style="background-color: #e0aeb5; height: 50px;">
          <label style="margin-top:0px !important;color: black ">
            <?php 
          
              echo $_GET['msg_error'];
          
          ?>
            
          </label>
        </div>
      </div>

    <?php }

        ?>

          <div class="row" style="margin-top: 5px;">
          <div class="form-group" style="margin-left: 15px;">
            <form action="index.php" method="post">
          <button type="submit" name="add" class="btn btn-primary" >Create</button>
          </form>
          </div>
          <div class="row" style="margin-left: 20px;">
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <p >Upload CSV File:<input type="file" name="file" required>
          <button type="submit" name="upload" class="btn btn-success" >Upload</button></p>
          </form>
        </div>
        </div>

        <div class="container" id="piechart" style="height: 350px;width: 720px;">
    <canvas id="myChart"></canvas>
  </div>

  <!-- <div class="panel-body">
                    <div id="chart_area" style="width: 1000px; height: 620px;"></div>
                </div> -->
                <!-- <div id="piechart" style="width: 900px; height: 500px; margin-left: 50px"></div> -->


          <?php 
           include 'insert_home.php';

           include 'chart_js.php';

        ?>


          <div class="form-group autocomplete">
            <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search"  />
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

