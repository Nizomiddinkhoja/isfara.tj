<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
$dbOperation = new DBOperations();
$message="";
$id = $_GET["id"];
if(isset($_POST["submit"])){
    $title_ru = $_POST["title_ru"]; $title_tj = $_POST["title_tj"]; $title_en = $_POST["title_en"];
    $description_ru = $_POST["description_ru"]; $description_tj = $_POST["description_tj"]; $description_en = $_POST["description_en"];

    try {
        $dbOperation->editCategory($id, $title_ru, $description_ru, "ru");
        $dbOperation->editCategory($id, $title_en, $description_en, "en");
        $dbOperation->editCategory($id, $title_tj, $description_tj, "tj");
        $message = "<h4 class='alert-success'>Успешно изменено!</h4>";
    } catch (Exception $exception) {
        $message = "<h4 class='alert-danger'>Ошибка: " . $exception->getMessage() . "</h4>";
    }
}
    $row_ru = mysqli_fetch_array($dbOperation->getCategoryByID($id, 'ru'));

    $row_tj = mysqli_fetch_array($dbOperation->getCategoryByID($id, 'tj'));

    $row_en = mysqli_fetch_array($dbOperation->getCategoryByID($id, 'en'));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Добавление категории новостей - Панель управления
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
      <form role="form" method="post" action="edit_category.php?id=<?=$id?>">
    <div class="container-fluid mt--7">
      <div class="row">


        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Воридкунии категория</h6>
                  <h2 class="mb-0">Бо забони точики</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart" style="height:auto">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" value="<?=$row_tj[0]?>" name="title_tj" placeholder="Сарлавха" type="text" required>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <textarea class="form-control" name="description_tj" placeholder="Матни мухтасар" style="height :50px" required><?=$row_tj[1]?></textarea>
                    <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Добавление новостей</h6>
                  <h2 class="mb-0">На русском языке</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart" style="height:auto">
                <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="title_ru" placeholder="Название" type="text" value="<?=$row_ru[0]?>" required>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <textarea class="form-control" name="description_ru" placeholder="Краткое описание" style="height :50px" ><?=$row_ru[1]?></textarea>
                    <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Add news</h6>
                  <h2 class="mb-0">In English</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart" style="height:auto">
               <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="title_en" placeholder="Title" type="text" value="<?=$row_en[0]?>"required>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <textarea class="form-control" name="description_en" placeholder="Short description" style="height :50px" required><?=$row_en[1]?></textarea>
                    <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="container-fluid mt-4">
            <!-- Table -->
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary my-4">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
      <div class="container-fluid">
          <?php
          include("../include/footer.php")
          ?>
      </div>
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="../assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>
    <?php
} else {
    header("Location: ../login.php");
}
?>