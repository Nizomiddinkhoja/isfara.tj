<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
$dbOperation = new DBOperations();
if(isset($_POST['submit'])){
    $question_tj = $_POST["question_tj"];
    $question_ru = $_POST["question_ru"];
    $question_en = $_POST["question_en"];

    $answer1_tj = $_POST["answer1_tj"]; $answer2_tj = $_POST["answer2_tj"]; $answer3_tj = $_POST["answer3_tj"]; $answer4_tj = $_POST["answer4_tj"];
    $answer1_en = $_POST["answer1_en"]; $answer2_en = $_POST["answer2_en"]; $answer3_en = $_POST["answer3_en"]; $answer4_en = $_POST["answer4_en"];
    $answer1_ru = $_POST["answer1_ru"]; $answer2_ru = $_POST["answer2_ru"]; $answer3_ru = $_POST["answer3_ru"]; $answer4_ru = $_POST["answer4_ru"];

    try {
        $dbOperation->addQuestion();
        $dbOperation->addAnswer();
        $dbOperation->addQuestionText($question_en, $answer1_en, $answer2_en, $answer3_en, $answer4_en, 'en');
        $dbOperation->addQuestionText($question_tj, $answer1_tj, $answer2_tj, $answer3_tj, $answer4_tj, 'tj');
        $dbOperation->addQuestionText($question_ru, $answer1_ru, $answer2_ru, $answer3_ru, $answer4_ru, 'ru');
        $message = "<h4 class='text-success'>Успешно сохранено!</h4>";
    }catch (Exception $exception){
        $message = "<h4 class='text-danger'>Ошибка: " . $exception->getMessage() . "</h4>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Саволу чавоб - Панель управления
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
      <form role="form" method="post">
        <div class="container-fluid mt--7">
          <div class="row">


            <div class="col-xl-4">
              <div class="card shadow">
                <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Воридкунии савол</h6>
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
                              <input class="form-control" name="question_tj" placeholder="Савол" type="text">
                          </div>
                      </div>
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" name="answer1_tj" placeholder="Чавоб" type="text">
                          </div>
                      </div>
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" name="answer2_tj" placeholder="Чавоб" type="text">
                          </div>
                      </div>
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" name="answer3_tj" placeholder="Чавоб" type="text">
                          </div>
                      </div>
                      <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" name="answer4_tj" placeholder="Чавоб" type="text">
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
<!--                      <h6 class="text-uppercase text-muted ls-1 mb-1">Добавление вопроса</h6>-->
<!--                      <h2 class="mb-0">На русском языке</h2>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="card-body">-->
<!--                  <!-- Chart -->-->
<!--                  <div class="chart" style="height:auto">-->
<!--                    <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control"  name="question_ru" placeholder="Вопрос" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer1_ru" placeholder="Чавоб" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer2_ru" placeholder="Чавоб" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer3_ru" placeholder="Чавоб" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer4_ru" placeholder="Чавоб" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->


<!--            <div class="col-xl-4">-->
<!--              <div class="card shadow">-->
<!--                <div class="card-header bg-transparent">-->
<!--                  <div class="row align-items-center">-->
<!--                    <div class="col">-->
<!--                      <h6 class="text-uppercase text-muted ls-1 mb-1">Add question</h6>-->
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
<!--                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                        </div>-->
<!--                        <input class="form-control" name="question_en" placeholder="Question" type="text">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer1_en" placeholder="Answer" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer2_en" placeholder="Answer" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer3_en" placeholder="Answer" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="form-group mb-3">-->
<!--                          <div class="input-group input-group-alternative">-->
<!--                              <div class="input-group-prepend">-->
<!--                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
<!--                              </div>-->
<!--                              <input class="form-control" name="answer4_en" placeholder="Answer" type="text">-->
<!--                          </div>-->
<!--                      </div>-->
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
                      <div class="card">
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
}
else{
    header("Location: ../login.php");
}
?>