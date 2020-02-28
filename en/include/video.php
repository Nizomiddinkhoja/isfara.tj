<?php
$l=0;
$resul = $dbOperation->getQuestions();
if(mysqli_num_rows($resul)>0) {
while ($quest = mysqli_fetch_array($resul)) {
    $l++;
}   }
$id=rand(1, $l);

$result_question_ru = $dbOperation->getQuestionByID($id, 'en');
$question_ru = mysqli_fetch_array($result_question_ru);

$result_answer_ru = $dbOperation->getAnswer($id, 'en');
$answer_ru = mysqli_fetch_array($result_answer_ru);

$result = $dbOperation->getVideo('en');

$message="";


if(isset($_POST["submit"])) {
  //  $answer_ru1 = $_POST["answer_ru"];

    try{
        $dbOperation->pollAnswer($_POST["answer_ru"]);
        $dbOperation->pollQuestions($id);
        $message = "<h4 class='text-success'>Thanks for the answer
!</h4>";
        $_POST="";
//        unset($_POST["submit"]);
    }catch (Exception $exception){
        $message = "<h4 class='text-danger'>Error: ". $exception->getMessage()."</h4>";
    }
}
?>
<section id="section-id-1573810024455" class="sppb-section">
                                    <div class="sppb-row-container">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-3" id="column-wrap-id-1573810024454">
                                                <div id="column-id-1573810024454" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-wrapper-1573810048723"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1573810048723" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-module newsberg-card">
                                                                    <div class="sppb-addon-content"><h3
                                                                                class="sppb-addon-title">Questions?</h3>
                                                                        <div class="mod-sppoll ">

                                                                            <form method="post" method="post" style="margin-left: 40px;">
                                                                                <strong><?=$question_ru[0]?></strong>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="answer_ru"
                                                                                           id="sppoll0" value="<?=$answer_ru[0]?>"
                                                                                           checked>
                                                                                    <label for="sppoll0">
                                                                                        <?=$answer_ru[1]?> </label>
                                                                                </div>
                                                                                <?php
                                                                                $answer_ru = mysqli_fetch_array($result_answer_ru);
                                                                                ?>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="answer_ru"
                                                                                           id="sppoll1" value="<?=$answer_ru[0]?>">
                                                                                    <label for="sppoll1">
                                                                                        <?=$answer_ru[1]?> </label>
                                                                                </div>
                                                                                <?php
                                                                                $answer_ru = mysqli_fetch_array($result_answer_ru);
                                                                                ?>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="answer_ru"
                                                                                           id="sppoll2" value="<?=$answer_ru[0]?>">
                                                                                    <label for="sppoll2">
                                                                                        <?=$answer_ru[1]?> </label>
                                                                                </div>
                                                                                <input type="submit" name="submit"
                                                                                       class="btn btn-default"
                                                                                       value="Ответить">
                                                                            </form>
                                                                            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                                                                                <?php if($message != ""){?>

                                                                                        <?=$message?>

                                                                                <?}?>
                                                                            </div>
<!--                                                                            <div class="sppoll-result">-->
<!--                                                                                </div>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-col-md-9" id="column-wrap-id-1573810024456">
                                                <div id="column-id-1573810024456" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-wrapper-1574066045843"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1574066045843" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-header heading-arrow sppb-text-left">
                                                                    <h2 class="sppb-addon-title">Video</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="sppb-addon-wrapper-1574065711678"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1574065711678" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-articles-thumb-slider  video-layout"
                                                                     data-slider-autoplay="0">
                                                                    <div class="sppb-addon-content">
                                                                        <div class="swiper-container articles-slider">
                                                                            <div class="swiper-wrapper">
                                                                                <?php
                                                                                while ($video = mysqli_fetch_array($result)) {
                                                                                ?>
                                                                                <div class="swiper-slide">
                                                                                    <?php
                                                                                    if ($video[3] == 0) {
                                                                                        ?>
                                                                                        <video controls height="100%"
                                                                                               width=100%
                                                                                               poster="../img/video.png">
                                                                                            <source
                                                                                                src="../../img/<?= $video[2] ?>"
                                                                                                type="video/mp4"/>
                                                                                        </video>
                                                                                        <?php
                                                                                    }else{
                                                                                    ?>

                                                                                    <iframe width="100%" height="100%"
                                                                                            src="https://www.youtube.com/embed/<?= $video[2] ?>"
                                                                                            frameborder="0"
                                                                                            allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture"
                                                                                            allowfullscreen></iframe>
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                </div>
                                                                                <?php
                                                                                }?>
                                                                            </div>
                                                                            <div class="thumb-slider-nav swiper-button-next d-none"></div>
                                                                            .
                                                                            <div class="thumb-slider-nav swiper-button-prev d-none"></div>
                                                                            .
                                                                        </div>
                                                                        <div class="swiper-container articles-thumb">
                                                                            <div class="swiper-wrapper">
                                                                                <?php
                                                                                $result = $dbOperation->getVideo('en');
                                                                                while ($video = mysqli_fetch_array($result)) {
                                                                                ?>
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <h3><?=$video[1]?></h3></div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>