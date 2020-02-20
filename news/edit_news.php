<?php
session_start();
include ("../sql/DBOperations.php");
$dbOperation = new DBOperations();
if($_SESSION["is_auth"]) {
    $id=$_GET["id"];
?>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Изменение новостя
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
      <form role="form">
        <div class="container-fluid mt--7">
          <div class="row">
              <?php
              $result = $dbOperation->get_edit_news_tj($id);
              if(mysqli_num_rows($result)> 0) {
                  $row = mysqli_fetch_array($result);
              }

              echo '
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
                        <input class="form-control"  type="text"  required="required" placeholder="Сарлавхаи хабар" value="'.$row['title'].'">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Матни кутох"  style="height :50px">'.$row['description'].'</textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Матни пурра" style="height :150px" >'.$row['body'].'</textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                                               <select class="form-control" id="" name="category_tj">
<!--                          <option value="none" hidden="">Категорияро интихоб кунед</option>-->

                            '?>
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

                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <?php
    $result = $dbOperation->get_edit_news_ru($id);
    if(mysqli_num_rows($result)> 0) {
        $row = mysqli_fetch_array($result);
    }

    echo '
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
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Название" type="text" value="'.$row['title'].'">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Краткое описание" style="height :50px" >'.$row['description'].'</textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Полное описание" style="height :150px" >'.$row['body'].'</textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                                                <select class="form-control" id="" name="category_tj">
<!--                          <option value="none" hidden="">Категорияро интихоб кунед</option>-->

                            '?>
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


    <?php
    $result = $dbOperation->get_edit_news_en($id);
    if(mysqli_num_rows($result)> 0) {
        $row = mysqli_fetch_array($result);
    }

    echo '
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
                        <input class="form-control" placeholder="Title" type="text" value="'.$row['title'].'">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Short description" style="height :50px" >'.$row['description'].'</textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Full description" style="height :150px" >'.$row['body'].'</textarea>
                        <!-- <input class="form-control" placeholder="Описание" type="text"> -->
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <select class="form-control" id="" name="category_tj">
<!--                          <option value="none" hidden="">Категорияро интихоб кунед</option>-->

                            '?>
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
          

          </div>
        </div>

          <div class="container-fluid mt-4">
              <!-- Table -->
              <div class="row">
                  <div class="col">
                      <div class="card shadow">
                          <div class="card-body">
                              <div class="card-columns">
<!--                                  <div class="form-group mb-4">-->
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
                                              
                                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                          </div>
                                          <input type="date" id="date" name="birthday" class="form-control" value="<?=$row['date']?>">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                          </div>
                                          <!--  <label>Фото: </label> -->
                                          <input type="file" name="filename" required="required" class="form-control"  >
                                      </div>
                                  </div>
                              </div>
                              <div class="text-center">
                                  <button type="button" class="btn btn-primary my-4">Сохранить</button>
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
}
else{
    header("Location: login.php");
}