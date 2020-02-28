<?php
require_once('../management/sql/DBOperations.php');
$dbOperation = new DBOperations();
?>
<!--                                Slider -->
<div id="section-id-1573624776029" class="sppb-section">
    <div class="sppb-container-inner">
        <div class="sppb-row">
            <div class="sppb-col-md-12" id="column-wrap-id-1573624776028">
                <div id="column-id-1573624776028" class="sppb-column">
                    <div class="sppb-column-addons">
                        <div id="sppb-addon-wrapper-1573624794184"
                             class="sppb-addon-wrapper">
                            <div id="sppb-addon-1573624794184" class="clearfix ">
                                <div class="sppb-addon sppb-addon-articles-thumb-slider  "
                                     data-slider-autoplay="1">
                                    <div class="sppb-addon-content">
                                        <div class="swiper-container articles-slider">
                                            <div class="swiper-wrapper">


                                                <?php
                                                $result = $dbOperation->getSliderByLang('tj');
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo '                                                                             
                                                                               <div class="swiper-slide"
                                                                                     style="background-image: url(../img/' . $row[2] . ');">
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <h3>
                                                                                                <a href="index.php/categories/newsberg/politics/the-exact-same-briefcase-soap-sorry-i-make.html"
                                                                                                   itemprop="url">' . $row[1] . '</a>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                            
                                                                                ';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="thumb-slider-nav swiper-button-next d-none"></div>
                                            .
                                            <div class="thumb-slider-nav swiper-button-prev d-none"></div>
                                            .
                                        </div>
                                        <div class="swiper-container articles-thumb">

                                            <div class="swiper-wrapper">
                                                <?php
                                                $result = $dbOperation->getSliderByLang('tj');
                                                $k=1;
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {

                                                        echo ' 
                                                                                     <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <span class="article-counter">' . $k . '</span>
                                                                                        <div class="sppb-article-content">                                                                                       
                                                                                        
                                                                                            <h3>' . $row[1] . '</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                                ';
                                                    $k++;
                                                    }
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
</div>
<!--                                End slider-->