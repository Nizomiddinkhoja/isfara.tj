<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
$dbOperation = new DBOperations();
$message="";
if(isset($_POST["submit"])){
    $title_ru = $_POST["title_ru"]; $title_tj = $_POST["title_tj"]; $title_en = $_POST["title_en"];
    $src = $_POST['src'];
    if (empty($src)){
        $is_youtube='0';
        if (isset($_FILES)) {
            if(move_uploaded_file($_FILES["filename"]["tmp_name"], "../../img/" . $_FILES["filename"]["name"])) {
                $video = $_FILES["filename"]["name"];
            }
        }
    }else{
        $is_youtube='1';
        $video=$_POST["src"];
    }
    try{
        $dbOperation->addVideo($video, $is_youtube);
        $dbOperation->addVideoText($title_tj,  "tj");
        $dbOperation->addVideoText($title_ru,  "ru");
        $dbOperation->addVideoText($title_en,  "en");
        $message = "<h4 class='text-success'>Успешно сохранено!</h4>";
    }catch (Exception $exception){
        $message = "<h4 class='text-danger'>Ошибка: ". $exception->getMessage()."</h4>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Видео - Панель управления
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
          <?php if($message != ""){?>
              <div class="card shadow ml-4 mr-5 pt-3 pb-2 pl-1">
                  <?=$message?>
              </div>
          <?}?>
      </div>
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="container-fluid mt--7">
          <div class="row">


            <div class="col-xl-4">
              <div class="card shadow">
                <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Воридкунии видео</h6>
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
                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                        </div>
                        <input class="form-control" placeholder="Ном" name="title_tj" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!--            <div class="col-xl-4">-->
<!--              <div class="card shadow">-->
<!--                <div class="card-header bg-transparent">-->
<!--                  <div class="row align-items-center">-->
<!--                    <div class="col">-->
<!--                      <h6 class="text-uppercase text-muted ls-1 mb-1">Добавление видео</h6>-->
<!--                      <h2 class="mb-0">На русском языке</h2>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="card-body">-->
<!--                  <!-- Chart -->-->
<!--                  <div class="chart" style="height:auto">-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>-->
<!--                        </div>-->
<!--                        <input class="form-control" placeholder="Название" name="title_ru" type="text">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->


<!--            <div class="col-xl-4">-->
<!--              <div class="card shadow">-->
<!--                <div class="card-header bg-transparent">-->
<!--                  <div class="row align-items-center">-->
<!--                    <div class="col">-->
<!--                      <h6 class="text-uppercase text-muted ls-1 mb-1">Add video</h6>-->
<!--                      <h2 class="mb-0">In English</h2>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="card-body">-->
<!--                  <!-- Chart -->-->
<!--                  <div class="chart" style="height:auto">-->
<!--                   <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>-->
<!--                        </div>-->
<!--                        <input class="form-control" placeholder="Name" name="title_en" type="text">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
          </div>
        </div>


          <div class="container-fluid mt-4">
              <!-- Table -->
              <div class="row">
                  <div class="col">
                      <div class="card shadow">
                          <div class="card-body">
                              <div class="card-columns">
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-link"></i></span>
                                          </div>
                                          <input type="text" id="src" name="src" class="form-control" placeholder="Ссылка" >
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input type="file" name="filename"  class="form-control" >
                                      </div>
                                  </div>
                              </div>
                              <div class="text-center">
                                  <button type="submit" name="submit" class="btn btn-primary my-4">Сохранить</button>
                              </div>
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