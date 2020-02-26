<?php
$result_question_ru = $dbOperation->getQuestionByID(1, 'ru');
$question_ru = mysqli_fetch_array($result_question_ru);

$result_answer_ru = $dbOperation->getAnswerById(1, 'ru');
$answer_ru = mysqli_fetch_array($result_answer_ru);

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
                                                                                class="sppb-addon-title">Вопросы?</h3>
                                                                        <div class="mod-sppoll ">
                                                                            <strong><?=$question_ru[0]?></strong>
                                                                            <form class="form-sppoll" data-id="1"
                                                                                  data-module_id="111">
                                                                                <div class="radio">
                                                                                    <input type="radio" name="question"
                                                                                           id="sppoll0" value="<?=$answer_ru[0]?>"
                                                                                           checked>
                                                                                    <label for="sppoll0">
                                                                                        <?=$answer_ru[0]?> </label>
                                                                                </div>
                                                                                <?php
                                                                                $answer_ru = mysqli_fetch_array($result_answer_ru);
                                                                                ?>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="question"
                                                                                           id="sppoll1" value="<?=$answer_ru[0]?>">
                                                                                    <label for="sppoll1">
                                                                                        <?=$answer_ru[0]?> </label>
                                                                                </div>
                                                                                <?php
                                                                                $answer_ru = mysqli_fetch_array($result_answer_ru);
                                                                                ?>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="question"
                                                                                           id="sppoll2" value="<?=$answer_ru[0]?>">
                                                                                    <label for="sppoll2">
                                                                                        <?=$answer_ru[0]?> </label>
                                                                                </div>
                                                                                <input type="submit"
                                                                                       class="btn btn-default"
                                                                                       value="Submit">
                                                                            </form>
                                                                            <div class="sppoll-results"></div>
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
                                                                    <h2 class="sppb-addon-title">Наворхо</h2>
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
                                                                                <div class="swiper-slide"
                                                                                     style="background-image: url(images/2019/12/10/tech-31.jpg);">
                                                                                    <a href="index.php/categories/newsberg/technology/the-exact-same-briefcase-soap-sorry-i-make.html"
                                                                                       itemprop="url"
                                                                                       class="full-link"></a>
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category"><a
                                                                                                            href="index.php/categories/newsberg/technology.html"
                                                                                                            itemprop="genre">Technology</a></span>
                                                                                            </div>
                                                                                            <h3>
                                                                                                <a href="index.php/categories/newsberg/technology/the-exact-same-briefcase-soap-sorry-i-make.html"
                                                                                                   itemprop="url">Sondland
                                                                                                    adds to testimony
                                                                                                    linking aid to
                                                                                                    Ukraine probes
                                                                                                    sought by Trump</a>
                                                                                            </h3>
                                                                                            <div class="video-caption-wrapper d-flex align-items-center">
                                                                                                <i class="fa fa-play-circle"></i>
                                                                                                <div class="video-caption-info">
                                                                                                    <span class="video-caption">Best London Corporate</span><span
                                                                                                            class="video-duration">01 : 35</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                     style="background-image: url(images/2019/12/10/business-6.jpg);">
                                                                                    <a href="index.php/business-blog/what-mixed-equal-parts-of-gasoline-and-frozen.html"
                                                                                       itemprop="url"
                                                                                       class="full-link"></a>
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category"><a
                                                                                                            href="index.php/business-blog.html"
                                                                                                            itemprop="genre">Business</a></span>
                                                                                            </div>
                                                                                            <h3>
                                                                                                <a href="index.php/business-blog/what-mixed-equal-parts-of-gasoline-and-frozen.html"
                                                                                                   itemprop="url">What
                                                                                                    mixed equal parts of
                                                                                                    gasoline and
                                                                                                    frozen</a></h3>
                                                                                            <div class="video-caption-wrapper d-flex align-items-center">
                                                                                                <i class="fa fa-play-circle"></i>
                                                                                                <div class="video-caption-info">
                                                                                                    <span class="video-caption">What mixed equal parts </span><span
                                                                                                            class="video-duration">01 : 36</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                     style="background-image: url(images/2019/12/10/politics-111.jpg);">
                                                                                    <a href="index.php/categories/newsberg/politics/what-household-items-really-if-one-were.html"
                                                                                       itemprop="url"
                                                                                       class="full-link"></a>
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category"><a
                                                                                                            href="index.php/categories/newsberg/politics.html"
                                                                                                            itemprop="genre">Politics</a></span>
                                                                                            </div>
                                                                                            <h3>
                                                                                                <a href="index.php/categories/newsberg/politics/what-household-items-really-if-one-were.html"
                                                                                                   itemprop="url">What
                                                                                                    household items.
                                                                                                    Really? If one
                                                                                                    were</a></h3>
                                                                                            <div class="video-caption-wrapper d-flex align-items-center">
                                                                                                <i class="fa fa-play-circle"></i>
                                                                                                <div class="video-caption-info">
                                                                                                    <span class="video-caption">What household items</span><span
                                                                                                            class="video-duration">08 : 36</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                     style="background-image: url(images/2019/12/10/entertainment-12.jpg);">
                                                                                    <a href="index.php/entertainment/for-you-what-being-clever-great-keep-it-up.html"
                                                                                       itemprop="url"
                                                                                       class="full-link"></a>
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category"><a
                                                                                                            href="index.php/entertainment.html"
                                                                                                            itemprop="genre">Entertainment</a></span>
                                                                                            </div>
                                                                                            <h3>
                                                                                                <a href="index.php/entertainment/for-you-what-being-clever-great-keep-it-up.html"
                                                                                                   itemprop="url">For
                                                                                                    you? What? Being
                                                                                                    clever. Great. Keep
                                                                                                    it up.</a></h3>
                                                                                            <div class="video-caption-wrapper d-flex align-items-center">
                                                                                                <i class="fa fa-play-circle"></i>
                                                                                                <div class="video-caption-info">
                                                                                                    <span class="video-caption">Video With Fashion and Glitches</span><span
                                                                                                            class="video-duration">00 : 10</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                     style="background-image: url(images/2019/12/04/food-14.jpg);">
                                                                                    <a href="index.php/food/what-do-you-do-what-do-you-mean-what.html"
                                                                                       itemprop="url"
                                                                                       class="full-link"></a>
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category"><a
                                                                                                            href="index.php/food.html"
                                                                                                            itemprop="genre">Food</a></span>
                                                                                            </div>
                                                                                            <h3>
                                                                                                <a href="index.php/food/what-do-you-do-what-do-you-mean-what.html"
                                                                                                   itemprop="url">What
                                                                                                    do you do? What do
                                                                                                    you mean what?</a>
                                                                                            </h3>
                                                                                            <div class="video-caption-wrapper d-flex align-items-center">
                                                                                                <i class="fa fa-play-circle"></i>
                                                                                                <div class="video-caption-info">
                                                                                                    <span class="video-caption">What do you mean what</span><span
                                                                                                            class="video-duration">00 : 30</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                     style="background-image: url(images/2019/12/11/politics7.jpg);">
                                                                                    <a href="index.php/sports/what-do-you-do-what-do-you-mean-what.html"
                                                                                       itemprop="url"
                                                                                       class="full-link"></a>
                                                                                    <div class="container">
                                                                                        <div class="sppb-article-info-wrap">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category"><a
                                                                                                            href="index.php/sports.html"
                                                                                                            itemprop="genre">Sports</a></span>
                                                                                            </div>
                                                                                            <h3>
                                                                                                <a href="index.php/sports/what-do-you-do-what-do-you-mean-what.html"
                                                                                                   itemprop="url">What
                                                                                                    do you do? What do
                                                                                                    you mean what?</a>
                                                                                            </h3>
                                                                                            <div class="video-caption-wrapper d-flex align-items-center">
                                                                                                <i class="fa fa-play-circle"></i>
                                                                                                <div class="video-caption-info">
                                                                                                    <span class="video-caption">Spring Sports</span><span
                                                                                                            class="video-duration">02 : 10</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="thumb-slider-nav swiper-button-next d-none"></div>
                                                                            .
                                                                            <div class="thumb-slider-nav swiper-button-prev d-none"></div>
                                                                            .
                                                                        </div>
                                                                        <div class="swiper-container articles-thumb">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category">Technology</span><span
                                                                                                        class="video-icon fa fa-play"></span><span
                                                                                                        class="video-caption-info"><span
                                                                                                            class="video-duration">01 : 35</span></span>
                                                                                            </div>
                                                                                            <h3>Sondland adds to
                                                                                                testimony linking aid to
                                                                                                Ukraine probes sought by
                                                                                                Trump</h3></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category">Business</span><span
                                                                                                        class="video-icon fa fa-play"></span><span
                                                                                                        class="video-caption-info"><span
                                                                                                            class="video-duration">01 : 36</span></span>
                                                                                            </div>
                                                                                            <h3>What mixed equal parts
                                                                                                of gasoline and
                                                                                                frozen</h3></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category">Politics</span><span
                                                                                                        class="video-icon fa fa-play"></span><span
                                                                                                        class="video-caption-info"><span
                                                                                                            class="video-duration">08 : 36</span></span>
                                                                                            </div>
                                                                                            <h3>What household items.
                                                                                                Really? If one were</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category">Entertainment</span><span
                                                                                                        class="video-icon fa fa-play"></span><span
                                                                                                        class="video-caption-info"><span
                                                                                                            class="video-duration">00 : 10</span></span>
                                                                                            </div>
                                                                                            <h3>For you? What? Being
                                                                                                clever. Great. Keep it
                                                                                                up.</h3></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category">Food</span><span
                                                                                                        class="video-icon fa fa-play"></span><span
                                                                                                        class="video-caption-info"><span
                                                                                                            class="video-duration">00 : 30</span></span>
                                                                                            </div>
                                                                                            <h3>What do you do? What do
                                                                                                you mean what?</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <div class="sppb-article-content">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-category">Sports</span><span
                                                                                                        class="video-icon fa fa-play"></span><span
                                                                                                        class="video-caption-info"><span
                                                                                                            class="video-duration">02 : 10</span></span>
                                                                                            </div>
                                                                                            <h3>What do you do? What do
                                                                                                you mean what?</h3>
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
                                        </div>
                                    </div>
                                </section>