<?php
session_start();
include ("../sql/DBOperations.php");
    if($_SESSION["is_auth"]) {

        $dbOperations = new DBOperations();
        $all_jamoats = $dbOperations->getJamoatsInfo( "tj");


        $jamoats = $dbOperations->getJamoats( "tj");
        $jamoat = mysqli_fetch_array($jamoats);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Джамоаты
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
<?php
include("../include/navbar.php");
?>
  <div class="main-content">
      <?php
      include("../include/navbar_top.php")
      ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      
    </div>

    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow" class="col-md-12" style="display: inherit;">
            <div class="card-header border-0" class="col-md-8" >
                <h2 class="mb-0" >Информации о джамотатах</h2>

            <div  class="col text-right"  class="col-md-4">
                  <a href="add_jamoats.php" class="btn btn-sm btn-primary">Добавить информацию про джамоаты</a>
                </div>
            </div>
            <div class="table-responsive">
              <div class="row" style="margin: unset;">
                  <?php


                  if(mysqli_num_rows($all_jamoats)> 0){
                      while ($row = mysqli_fetch_array($all_jamoats)){

                          echo
                              ' 
            <div class="col-md-4">
          
              <h2>'.$row['title'].'</h2>
              <h4>'.$jamoat['title'].'</h4>
                  <a  href="edit_jamoats.php?id='.$row['id'].'"  class="btn btn-sm btn-success">Изменить</a>
                  <a href="delete_jamoats.php?id='.$row['id'].'" class="btn btn-sm btn-danger">Удалить</a> 
            
            </div>' ;
                }
            }
                  ?>



          </div>
            </div>
          </div>
        </div>
      </div>
      <?php
         include("../include/footer.php")
        ?>
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
 
</body>

</html>
        <?php
    }
    else{
        header("Location: ../login.php");
    }