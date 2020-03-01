<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Вопросы
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
              <h2 class="mb-0" >Вопросы</h2>

            <div  class="col text-right"  class="col-md-4">
                  <a href="add_questions.php" class="btn btn-sm btn-primary">Добавить вопрос</a>
                </div>
            </div>
            <div class="table-responsive">
              <div class="row" style="margin: unset;">

                  <?php

                  if (isset($_GET['pageno'])) {
                      $pageno = $_GET['pageno'];
                  } else {
                      $pageno = 1;
                  }


                  $dbOperations = new DBOperations();
                  $no_of_records_per_page = 9;
                  $offset = ($pageno-1) * $no_of_records_per_page;

                  $total_rows = $dbOperations->getQuestionsCount();
                  $total_pages = ceil($total_rows / $no_of_records_per_page);

                  $result = $dbOperations->getQuestions("ru", $offset, $no_of_records_per_page);
                  if($result) {
                  while ($questions = mysqli_fetch_array($result)) {
                  ?>
            <div class="col-md-4">
              <h2><?=$questions[1]?></h2>
                  <a href="edit_questions.php?id=<?=$questions[0]?>" class="btn btn-sm btn-success">Изменить</a>
                  <a href="delete_questions.php?id=<?=$questions[0]?>" class="btn btn-sm btn-danger">Удалить</a>
            </div>
                      <?php
                  }
                  }
                  ?>
          </div>
            </div>

              <div class="card-footer py-4">
                  <nav aria-label="...">
                      <ul class="pagination justify-content-end mb-0">
                          <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                              <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" tabindex="-1">
                                  <i class="fas fa-angle-left"></i>
                                  <span class="sr-only">Previous</span>
                              </a>
                          </li>
                          <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                              <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">
                                  <i class="fas fa-angle-right"></i>
                                  <span class="sr-only">Next</span>
                              </a>
                          </li>
                      </ul>
                  </nav>
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
?>