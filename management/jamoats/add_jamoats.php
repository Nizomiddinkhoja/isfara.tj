<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
$dbOperation = new DBOperations();
$message="";
if(isset($_POST["submit"])){
    $title_ru = $_POST["title_ru"]; $title_tj = $_POST["title_tj"]; $title_en = $_POST["title_en"];
        $category_tj= $_POST["category_tj"];
        $full_description_ru = $_POST["full_description_ru"]; $full_description_tj = $_POST["full_description_tj"]; $full_description_en = $_POST["full_description_en"];
    try{
                    $dbOperation->addJamoatsInfo($category_tj);
                    $dbOperation->addJamoatsInfoText($title_tj, $full_description_tj, "tj");
                    $dbOperation->addJamoatsInfoText($title_ru, $full_description_ru, "ru");
                    $dbOperation->addJamoatsInfoText($title_en, $full_description_en, "en");
        $message = "<h4 class='text-success'>Успешно сохранено!</h4>";
    }catch (Exception $exception){
        $message = "<h4 class='alert-danger'>Ошибка: ". $exception->getMessage()."</h4>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Добавление информаций о джамоатах
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
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Воридкунии маълумот</h6>
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
                        <input class="form-control" placeholder="Сарлавха"  name="title_tj" type="text" required>
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Матни пурра"   name="full_description_tj"  style="height :150px" required ></textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-arrow-alt-circle-down"></i></span>
                        </div>
                        <select class="form-control" id="" name="category_tj">
<!--                          <option value="none" hidden="">Категорияро интихоб кунед</option>-->
                            <?php
                            $jamoat = $dbOperation->getJamoats("tj");
                            if(mysqli_num_rows($jamoat)> 0){
                                while ($row = mysqli_fetch_array($jamoat)){
                                    echo
                                        ' 
                                    <option value="'.$row['id'].'">'.$row['title'].'</option>            
            ' ;
                                }
                            }
                            ?>

                        </select>
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
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Добавление информаций</h6>
                      <h2 class="mb-0">На русском языке</h2>
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
                        <input class="form-control" placeholder="Название" name="title_ru" type="text" required>
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Полное описание" name="full_description_ru" style="height :150px" required ></textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-arrow-alt-circle-down"></i></span>
                        </div>
                        <select class="form-control" id="" name="category_ru">
<!--                          <option value="none" hidden="">Выберите категорию</option>-->
                            <?php
                            $jamoat = $dbOperation->getJamoats("ru");
                            if(mysqli_num_rows($jamoat)> 0){
                                while ($row = mysqli_fetch_array($jamoat)){
                                    echo
                                        ' 
                                    <option value="'.$row['id'].'">'.$row['title'].'</option>            
            ' ;
                                }
                            }
                            ?>
                        </select>
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
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Add information</h6>
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
                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                        </div>
                        <input class="form-control" placeholder="Title" name="title_en" type="text" required>
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Full description" name="full_description_en"  style="height :150px" required></textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-arrow-alt-circle-down"></i></span>
                        </div>
                        <select class="form-control" id="" name="category_en">
<!--                          <option value="none" hidden="">Choose category</option>-->
                            <?php
                            $jamoat = $dbOperation->getJamoats("en");
                            if(mysqli_num_rows($jamoat)> 0){
                                while ($row = mysqli_fetch_array($jamoat)){
                                    echo
                                        ' 
                                    <option value="'.$row['id'].'">'.$row['title'].'</option>            
            ' ;
                                }
                            }
                            ?>
                        </select>
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
                          <div class="card-body">
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
 
</body>

</html>
    <?php
} else {
    header("Location: ../login.php");
}
?>