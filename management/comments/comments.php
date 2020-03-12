<?php
session_start();
include("../sql/DBOperations.php");
if ($_SESSION["is_auth"]) {
$dbOperation = new DBOperations();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Коментарии - Панель управления
  </title>
  <!-- Favicon -->
  <link href="./../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
<?php
include("../include/navbar.php");
?>
  <div class="main-content">
      <?php
      include ("../include/navbar_top.php")
      ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      
    </div>

    <div class="container-fluid mt--7">
            <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Коментарияҳо</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr >
                    <th scope="col">ФИО</th>
                      <th scope="col">Новость</th>
                      <th scope="col">Телефон</th>
                    <th scope="col">Текст</th>
                      <th scope="col">Дата</th>
<!--                      <th scope="col"></th>-->
<!--                    <th scope="col"></th>-->
                  </tr>
                </thead>
                <tbody>
                <?php

                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }


                $dbOperations = new DBOperations();
                $no_of_records_per_page =10;
                $offset = ($pageno-1) * $no_of_records_per_page;

                $total_rows = $dbOperations->getCommentCount();
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $result = $dbOperations->getComment($offset, $no_of_records_per_page);
                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $newsResult=$dbOperation->get_edit_news_tj($row['id_news']);
                        $news=mysqli_fetch_array($newsResult);


                        if ($row[8]=='1'){
                            $class="bg-success";
                        }else{
                            $class="bg-warning";
                        }


                        echo
                        '
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center"> 
                        <div class="media-body">
                          <span class="mb-0 text-sm">'.$row['name'].'</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                         '.substr($news['title'], 0, 50).'<!-- class="bg-success" -->
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                         '.$row['phone'].'<!-- class="bg-success" -->
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        '.substr($row['text'], 0, 50).'
                      </div>
                    </td> 
                    <td>
                      '.$row['date'].'
                    </td>    
                    
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModalLong'.$row[0].'" style="cursor: pointer;">Подробнее</a>
                          <a class="dropdown-item" href="delete_comments.php?id='.$row[0].'">Удалить</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                  
                  
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong'.$row[0].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Электронная очередь</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <h1 style="text-align-last:   center;">'.$row['name'].'</h1>
                        <h2 style="text-align-last:  center;">'.$news['title'].'</h2>
                        <p><br>'.$row['text'].'</p>

                        <div > 
                          <img src="smartphone.png" alt="">
                            <p style="margin-left: 5px; display: inline-block;">'.$row['phone'].'</p>
                        </div>
                        
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <a  class="btn btn-danger" href="delete_comments.php?id='.$row[0].'">Удалить</a>
                          </div>
                        </div>
                      </div>
                    </div>      
                        
                   ';}}
                   ?>
<!--                editViewRequest-->

                 
                </tbody>

                  <style type="text/css">
                  .card .table td, 
                  .card .table th{
                    padding-right:  unset;
                    /*padding-left: unset;*/
                  }
                  </style>
              </table>
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
        include ("../include/footer.php")
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