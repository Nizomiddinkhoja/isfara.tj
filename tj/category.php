<?php
    include ("../management/sql/DBOperations.php");
    $dbOperations = new DBOperations();
include("../counter.php");

if(isset($_GET['id'])){
    $id = $_GET["id"];

    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }


    $no_of_records_per_page = 10;
    $offset = ($pageno-1) * $no_of_records_per_page;

    $total_rows = $dbOperations->getNewsCount();
    $total_pages = ceil($total_rows / $no_of_records_per_page);



    $all_news = $dbOperations->getNewsByCategoryById($id, "tj", $offset, $no_of_records_per_page);
    $news = mysqli_fetch_array($all_news);

    $category = mysqli_fetch_array($dbOperations->getCategoryByID($id, "tj"));
    }

?>
<!doctype html>
<html lang="tj" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Категорияи <?=$category[0]?> - Сомонаи расмии мақомоти иҷроияи ҳокимияти давлатии шаҳри Исфара</title>
    <link href="../img/favicon.ico" rel="shortcut icon"/>
    <link href="components/com_sppagebuilder/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/sppagecontainer.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="modules/mod_sp_tweet/assets/css/mod_sp_tweet.default.css" rel="stylesheet" type="text/css"/>
    <link href="modules/mod_sp_poll/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Frank%20Ruhl%20Libre:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin"
          rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Arimo:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext"
          rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Frank%20Ruhl%20Libre:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext"
          rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Arimo:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic-ext"
          rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/template.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/presets/preset1.css" rel="stylesheet" class="preset" type="text/css"/>
    <link href="modules/mod_helix3_options/assets/css/helix3-options.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="media/mod_languages/css/template4f50.css?0fe5eabe7d411626b85406bf464c07ff" rel="stylesheet"
          type="text/css"/>
    <link href="modules/mod_sp_weather/assets/css/flat.css" rel="stylesheet" type="text/css"/>

    <link href="templates/newsberg/css/main.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .sppb-addon-articles-thumb-slider .articles-thumb .article-counter, .sppb-addon-module .mod-sppoll > strong, #sp-bottom .sp-module ul > li .sp-bottom-title, .spauthorarchive-articles .spauthorarchive-info-wrap p span, #spauthorarchive .newsberg-author-title {
            font-family: 'Frank Ruhl Libre', sans-serif;
        }

        body {
            font-family: 'Arimo', sans-serif;
            font-size: 16px;
        }

        @media (max-width: 767px) {
            body {
                font-size: 13px;
            }
        }

        h1 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 60px;
            font-weight: 700;
        }

        @media (max-width: 767px) {
            h1 {
                font-size: 40px;
            }
        }

        h2 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 34px;
            font-weight: 400;
        }

        @media (max-width: 767px) {
            h2 {
                font-size: 24px;
            }
        }

        h3 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 27px;
            font-weight: 400;
        }

        @media (max-width: 767px) {
            h3 {
                font-size: 20px;
            }
        }

        h4 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 18px;
            font-weight: 400;
        }

        @media (max-width: 767px) {
            h4 {
                font-size: 15px;
            }
        }

        #sp-top1 > .sp-column > .sp-module .sp-module-title {
            font-family: 'Arimo', sans-serif;
        }

        .logo-image {
            height: 45px;
        }

        .logo-image-phone {
            height: 45px;
        }

        #sp-bottom-top {
            padding: 25px 0px 25px 0px;
        }

        #sp-footer {
            background-color: #1c4dad;
        }
    </style>
    <script src="media/jui/js/jquery.min4f50.js?0fe5eabe7d411626b85406bf464c07ff" type="text/javascript"></script>
    <script src="media/jui/js/jquery-noconflict4f50.js?0fe5eabe7d411626b85406bf464c07ff"
            type="text/javascript"></script>
    <script src="media/jui/js/jquery-migrate.min4f50.js?0fe5eabe7d411626b85406bf464c07ff"
            type="text/javascript"></script>
    <script src="components/com_sppagebuilder/assets/js/jquery.parallax.js" type="text/javascript"></script>
    <script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/swiper.min.js" type="text/javascript"></script>
    <script src="components/com_spauthorarchive/assets/js/spauthorarchive.js" type="text/javascript"></script>
    <script src="modules/mod_sp_poll/assets/js/script.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/popper.min.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/main.js" type="text/javascript"></script>
    <script src="modules/mod_sp_tabbed_articles/assets/js/sp-tabbed-articles.js" type="text/javascript"></script>
    <script src="modules/mod_helix3_options/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="modules/mod_helix3_options/assets/js/helix3-options.js" type="text/javascript"></script>
    <script src="components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="media/system/js/core4f50.js?0fe5eabe7d411626b85406bf464c07ff" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="/2019/newsberg/media/system/js/polyfill.event.js?0fe5eabe7d411626b85406bf464c07ff"
            type="text/javascript"></script><![endif]-->
    <script src="media/system/js/keepalive4f50.js?0fe5eabe7d411626b85406bf464c07ff" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(window).on('load', function () {
            new JCaption('img.caption');
        });
        template = "newsberg";
        var helix3_template = "newsberg";
        var helix3_template_uri = "/2019/newsberg/templates/newsberg";
        jQuery(function ($) {

            var addonId = $("#sppb-addon-1573641031813"),
                prentSectionId = addonId.parent().closest("section");

            if ($("#sppb-addon-1573641031813").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0) {
                prentSectionId.hide();
            }

            if ($("#sppb-addon-1573641031813").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0) {
                //var parentSection 	= $("#sppb-addon-1573641031813").parent().closest("section"),
                var addonWidth = addonId.parent().outerWidth(),
                    optin_timein = 2000,
                    optin_timeout = 10000,
                    prentSectionId = ".com-sppagebuilder:not(.layout-edit) #" + addonId.attr("id");

                $(window).load(function () {
                    setTimeout(function () {
                        $.magnificPopup.open({
                            items: {
                                src: "<div class=\"sppb-optin-form-popup-wrap\" \">" + $(addonId)[0].outerHTML + "</div>"
                                //src: "<div style=\"width:+"addonWidth"+\">" + $(addonId)[0].outerHTML + "</div>"
                            },
                            type: "inline",
                            mainClass: "mfp-fade",
                            disableOn: function () {
                                return true;
                            },
                            callbacks: {
                                open: function () {
                                    if (optin_timeout) {
                                        setTimeout(function () {
                                            $("#sppb-addon-1573641031813").magnificPopup("close");
                                        }, optin_timeout);
                                    }
                                }
                            }
                        });
                    }, optin_timein);
                }); //window
            }
            ;
        })
        jQuery(function ($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({"html": true, "container": "body"});
            }
        });
    </script>
</head>
<body class="site helix-ultimate com-content view-category layout-default task-none itemid-220 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-left">
<div class="body-wrapper">
    <div class="body-innerwrapper">
        <?php
        include("include/header.php");
        ?>
        <section id="sp-section-3">
            <div class="row">
                <div id="sp-title" class="col-lg-12 ">
                    <div class="sp-column "></div>
                </div>
            </div>
        </section>
        <section id="sp-main-body">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <main id="sp-component" class="col-lg-12 " role="main">
                            <div class="sp-column ">
                                <div id="system-message-container">
                                </div>
                                <div class="blog">
                                    <h3 class="newsberg-blog-title">Хабарҳо</h3>
                                    <div class="items-leading clearfix">
                                        <article class="item leading-0 item-featured">
                                            <div class="article-body">
                                                <div class="newsberg-article-content-leading-wrap row">
                                                    <div class="newsberg-article-content col-sm-5">
                                                        <div class="newsberg-title-top">
                                                            <div class="article-info">
                                                                <span class="category-name" title="Категорияи: <?=$category[0]?>">
                                                                    <a href="#"><?=$category[0]?></a>
                                                                </span>
                                                                <span class="published" title="Нашр шудааст: <?=$news[5]?>">
                                                            <time><?=$news[5]?></time>
                                                            </span>
                                                            </div>
                                                        </div>
                                                        <div class="article-header">
                                                            <h2>
                                                                <a href="view_news.php?id=<?=$news[0]?>&category=<?=$id?>"><?=$news[1]?></a>
                                                            </h2>
                                                        </div>
                                                        <div class="newsberg-article-introtext">
                                                            <p><?=$news[2]?></p>
                                                            <div class="newsberg-article-introtext-bottom">
                                                                <div class="article-info">
                                                                    <span class="category-name" title="Категорияи: <?=$category[0]?>"><a href="#>"><?=$category[0]?>></a></span>
                                                                    <span class="published" title="Нашр шудааст: <?=$news[5]?>"><time><?=$news[5]?></time></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="newsberg-article-image col-sm-7">
                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$id?>">
                                                            <div class="article-intro-image">
                                                                <img src="../img/<?=$news[3]?>">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>


                                    </div>
                                    <div class="items-row row clearfix">
                                        <?php

                                        if (isset($_GET['pageno'])) {
                                            $pageno = $_GET['pageno'];
                                        } else {
                                            $pageno = 1;
                                        }
                                        while($news = mysqli_fetch_array($all_news)) {
                                            ?>
                                            <div class="col-sm-4">
                                                <article class="item column-1 item-featured">
                                                    <div class="article-body">
                                                        <div class="article-header">
                                                            <h2>
                                                                <a href="view_news.php?id=<?=$news[0]?>&category=<?=$id?>">
                                                                    <?=$news[1]?></a>
                                                            </h2>
                                                        </div>
                                                        <div class="newsberg-article-content">
                                                            <div class="newsberg-article-introtext">
                                                                <p><?=$news[2]?></p>
                                                                <div class="newsberg-article-introtext-bottom">
                                                                    <div class="article-info">
                                                                        <span class="category-name" title="Категорияи: <?=$category[0]?>">
                                                                            <a href="">Politics</a>
                                                                        </span>
                                                                        <span class="published" title="Нашр шудааст: <?=$news[5]?>">
                                                                            <time><?=$news[5]?></time>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="newsberg-article-image itemtype-standard">
                                                                <a href="view_news.php?id=<?=$news[0]?>&category=<?=$id?>">
                                                                    <div class="article-intro-image">
                                                                        <img src="../img/<?=$news[3]?>">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>

                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>


                                    <div class="pagination-wrapper">
                                        <ul class="pagination">
                                            <li><a class="page-link next" href="?id=<?=$id?>&pageno=1">Ба аввал</a></li>
                                            <li class="page-item <?if($pageno <= 1){ echo 'disabled'; } ?>">
                                                <a  class="page-link next" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?id=".$id."&pageno=".($pageno - 1); } ?>">Ба қафо</a>
                                            </li>
                                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                                <a  class="page-link next" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?id=".$id."&pageno=".($pageno + 1); } ?>">Ба пеш</a>
                                            </li>
                                            <li><a  class="page-link next" href="?id=<?=$id?>&pageno=<?php echo $total_pages; ?>">Ба охир</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include("include/footer.php");
        ?>
    </div>
</div>

</body>

<!-- Mirrored from demo2.joomshaper.com/2019/newsberg/index.php/categories/newsberg/politics by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 09:15:52 GMT -->
</html>