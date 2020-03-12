<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
$dbOperation = new DBOperations();
$message="";

//
//    $result1 = $dbOperation->maxNews();
//    $max = mysqli_fetch_array($result1);



if(isset($_POST["submit"])){
    $title_ru = $_POST["title_ru"]; $title_tj = $_POST["title_tj"]; $title_en = $_POST["title_en"];
    $date= $_POST["date"];
    $category_tj= $_POST["category_tj"];
    $short_description_ru = $_POST["short_description_ru"]; $short_description_tj = $_POST["short_description_tj"]; $short_description_en = $_POST["short_description_en"];
    $file1 = " "; $file2 = " "; $file3 = " "; $file4 = " "; $file5 = " ";
    $full_description_ru = $_POST["full_description_ru"]; $full_description_tj = $_POST["full_description_tj"]; $full_description_en = $_POST["full_description_en"];
    try{
        if (isset($_FILES["filename"]) && $_FILES["photo"]["error"] == 0) {
            if(move_uploaded_file($_FILES["filename"]["tmp_name"], "../../img/" . $_FILES["filename"]["name"])) {
                $file1 = $_FILES["filename"]["name"];
                if (isset($_FILES["filename2"]) && $_FILES["photo"]["error"] == 0) {
                    if(move_uploaded_file($_FILES["filename2"]["tmp_name"], "../../img/" . $_FILES["filename2"]["name"])) {
                        $file2 = $_FILES["filename2"]["name"];
                    }
                }
                if (isset($_FILES["filename3"]) && $_FILES["photo"]["error"] == 0) {
                    if(move_uploaded_file($_FILES["filename3"]["tmp_name"], "../../img/" . $_FILES["filename3"]["name"])) {
                        $file3 = $_FILES["filename3"]["name"];
                    }
                }
                if (isset($_FILES["filename4"]) && $_FILES["photo"]["error"] == 0) {
                    if(move_uploaded_file($_FILES["filename4"]["tmp_name"], "../../img/" . $_FILES["filename4"]["name"])) {
                        $file4 = $_FILES["filename4"]["name"];
                    }
                }
                if (isset($_FILES["filename5"]) && $_FILES["photo"]["error"] == 0) {
                    if(move_uploaded_file($_FILES["filename5"]["tmp_name"], "../../img/" . $_FILES["filename5"]["name"])) {
                        $file5 = $_FILES["filename5"]["name"];
                    }
                }
                    $dbOperation->addNews($category_tj, $date, $file1, $file2, $file3, $file4, $file5);
                    $dbOperation->addNewsText($title_tj, $short_description_tj, $full_description_tj, "tj");
                    $dbOperation->addNewsText($title_ru, $short_description_ru, $full_description_ru, "ru");
                    $dbOperation->addNewsText($title_en, $short_description_en, $full_description_en, "en");
                    $message = "<h4 class='text-success'>Успешно сохранено!</h4>";
            }
        }
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
    Добавление новостя
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
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Воридкунии хабар</h6>
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
                        <textarea class="form-control" placeholder="Матни мухтасар"  name="short_description_tj" style="height :50px" required></textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
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
                            $result = $dbOperation->get_Categories_tj();
                            if(mysqli_num_rows($result)> 0){
                                while ($row = mysqli_fetch_array($result)){
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

<!--            <div class="col-xl-4">-->
<!--              <div class="card shadow">-->
<!--                <div class="card-header bg-transparent">-->
<!--                  <div class="row align-items-center">-->
<!--                    <div class="col">-->
<!--                      <h6 class="text-uppercase text-muted ls-1 mb-1">Добавление новостей</h6>-->
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
<!--                        <input class="form-control" placeholder="Название" name="title_ru" type="text" required>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>-->
<!--                        </div>-->
<!--                        <textarea class="form-control" placeholder="Краткое описание" name="short_description_ru" style="height :50px" required></textarea>-->
<!--                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>-->
<!--                        </div>-->
<!--                        <textarea class="form-control" placeholder="Полное описание" name="full_description_ru" style="height :150px" required ></textarea>-->
<!--                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-arrow-alt-circle-down"></i></span>-->
<!--                        </div>-->
<!--                        <select class="form-control" id="" name="category_ru">-->
<!--<!--                          <option value="none" hidden="">Выберите категорию</option>-->-->
<!--                            --><?php
//                            $result = $dbOperation->get_Categories_ru();
//                            if(mysqli_num_rows($result)> 0){
//                                while ($row = mysqli_fetch_array($result)){
//                                    echo
//                                        '
//                                    <option value="'.$row['id'].'" >'.$row['title'].'</option>
//            ' ;
//                                }
//                            }
//                            ?>
<!--                        </select>-->
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
<!--                      <h6 class="text-uppercase text-muted ls-1 mb-1">Add news</h6>-->
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
<!--                        <input class="form-control" placeholder="Title" name="title_en" type="text" required>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>-->
<!--                        </div>-->
<!--                        <textarea class="form-control" placeholder="Short description" name="short_description_en" style="height :50px" required></textarea>-->
<!--                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>-->
<!--                        </div>-->
<!--                        <textarea class="form-control" placeholder="Full description" name="full_description_en"  style="height :150px" required></textarea>-->
<!--                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="form-group mb-3">-->
<!--                      <div class="input-group input-group-alternative">-->
<!--                        <div class="input-group-prepend">-->
<!--                          <span class="input-group-text"><i class="fa fa-arrow-alt-circle-down"></i></span>-->
<!--                        </div>-->
<!--                        <select class="form-control" id="" name="category_en">-->
<!--<!--                          <option value="none" hidden="">Choose category</option>-->-->
<!--                            --><?php
//                            $result = $dbOperation->get_Categories_en();
//                            if(mysqli_num_rows($result)> 0){
//                                while ($row = mysqli_fetch_array($result)){
//                                    echo
//                                        '
//                                    <option value="'.$row['id'].'">'.$row['title'].'</option>
//            ' ;
//                                }
//                            }
//                            ?>
<!--                        </select>-->
<!--                      </div>-->
<!--                    </div>-->
<!---->
<!---->
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
<!--                                  <div class="form-group mb-3">-->
<!--                                      <div class="input-group input-group-alternative">-->
<!--                                          <div class="input-group-prepend">-->
<!--                                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                                          </div>-->
<!--                                          <select class="form-control" placeholder="Выберите автора" id="" name="" form="">-->
<!--                                              <option value="none" hidden="">Муаллифро интихоб кунед</option>-->
<!--                                              <option value="volvo">Volvo</option>-->
<!--                                              <option value="saab">Saab</option>-->
<!--                                              <option value="opel">Opel</option>-->
<!--                                              <option value="audi">Audi</option>-->
<!--                                          </select>-->
<!--                                      </div>-->
<!--                                  </div>-->
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                          </div>
                                          <input type="date" id="date" name="date" class="form-control" placeholder="Дата" >
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input  type="file" name="filename" required="required" class="form-control"  >
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input  type="file" name="filename2" class="form-control"  >
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input  type="file" name="filename3" class="form-control"  >
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input  type="file" name="filename4" class="form-control"  >
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input  type="file" name="filename5" class="form-control"  >
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
 
</body>

</html>
    <?php
} else {
    header("Location: ../login.php");
}
?>