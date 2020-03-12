<?php
include("../management/sql/DBOperations.php");
$dbOperations = new DBOperations();
include("../counter.php");

$result_news1 = $dbOperations->get_new('tj');
$news1 = mysqli_fetch_array($result_news1);


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $category_id = $_GET["category"];
    $news = mysqli_fetch_array($dbOperations->get_edit_news_tj($id));


    $category = mysqli_fetch_array($dbOperations->getCategoryByID($category_id, "tj"));


}

if (isset($_POST['ok'])) {
    $name = $_POST["name"];
    $text = $_POST["text"];
    $phone = $_POST["phone"];
    $date = date("Y-m-d H:i:s");
    $comment_result = $dbOperations->addComment($id, $name, $text, $phone, $date, $status = '1');
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
    <meta name="author" content="Kawshar Ahmed"/>
    <meta name="generator" content="Joomla! - Open Source Content Management"/>
    <title><?= $news[1] ?></title>
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
        .sp-page-builder .page-content #section-id-1573800678987 {
            padding-top: 10px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        #column-id-1573800678986 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1573808445338 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573808445338 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573808445338 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573808445338 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804434946 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804434946 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804434946 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804434946 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573808545532 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573808545532 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1573808545532 .sppb-addon-title {
            color: #98979c;
            font-size: 14px;
            line-height: 14px;
            line-height: 25px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573808545532 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573808545532 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804435116 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435116 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435116 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435116 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804434694 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804434694 {
            color: #6b6d83;
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1573804434694 .sppb-addon-title {
            margin-bottom: 20px;
            color: #020b1b;
            font-size: 34px;
            line-height: 34px;
            line-height: 45px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804434694 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1573804434694 .sppb-addon-title {
                font-size: 25px;
                line-height: 25px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            #sppb-addon-wrapper-1573804434694 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1573804434694 {
            font-size: 16px;
            line-height: 32px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1573804434694 {
                font-size: 16px;
                line-height: 26px;
            }
        }

        #sppb-addon-wrapper-1573804435149 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435149 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435149 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435149 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804435127 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435127 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435127 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435127 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804435138 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435138 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435138 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435138 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

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
        jQuery(function ($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({"html": true, "container": "body"});
            }
        });
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
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575467171374 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575467041907 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
    </script>
</head>
<body class="site helix-ultimate com-content view-article layout-blog task-none itemid-115 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-left">
<div class="body-wrapper">
    <div class="body-innerwrapper">
        <?php
        include("include/header.php");
        ?>

        <section id="sp-main-body">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <main id="sp-component" class="col-lg-12 " role="main">
                            <div class="sp-column ">
                                <div id="system-message-container">
                                </div>
                                <div class="article-details">
                                    <meta itemprop="inLanguage" content="en-GB">
                                    <div class="newsberg-details-img-wrapper">
                                        <div class="img-top-wrap">
                                            <div class="article-info">

                                                <span class="category-name" title="Категория: <?= $category[0] ?>">
                                                    <a href="category.php?id=<?= $category_id ?>"> <?= $category[0] ?></a>
                                                </span>
                                                <span class="published" title="Нашр шудааст: <?= $news[5] ?>">
                                                    <time><?= $news[5] ?></time>
                                                </span>
                                            </div>
                                            <div class="article-header">
                                                <h1 itemprop="headline">
                                                    <?= $news[1] ?> </h1>
                                            </div>
                                            <div class="article-info">
                                                <span class="category-name" title="Категория:  <?= $category[0] ?>">
                                                    <a href="category.php?id=<?= $category_id ?>"> <?= $category[0] ?></a>
                                                </span>
                                                <span class="published" title="Нашр шудааст:  <?= $news[5] ?>">
                                                    <time><?= $news[5] ?></time>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="article-full-image">
                                            <img src="../img/<?= $news[3] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 offset-sm-1">
                                            <div class="article-ratings-social-share d-flex justify-content-end">
                                                <div class="mr-auto align-self-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="article-can-edit d-flex flex-wrap justify-content-between">
                                            </div>
                                            <div class="article-info">

                                                <span class="category-name" title="Категория: Business">
                                                    <a href="">Business</a>
                                                </span>
                                                <span class="published" title="Нашр шудааст: <?= $news[5] ?>">
                                                    <time><?= $news[5] ?></time>
                                                </span>
                                                <span class="hits">
<!--                                                    <span class="fa fa-eye-o" aria-hidden="true"></span>-->
                                                    <!--                                                    <meta itemprop="interactionCount" content="UserPageVisits:57">Hits: 57</span>-->
                                            </div>
                                            <div itemprop="articleBody">
                                                <div id="sp-page-builder"
                                                     class="sp-page-builder sppb-article-page-wrapper">
                                                    <div class="page-content">
                                                        <section id="section-id-1573800678987" class="sppb-section">
                                                            <!--                                                            <div class="sppb-row-container">-->
                                                            <div class="sppb-row">
                                                                <div class="sppb-col-md-12"
                                                                     id="column-wrap-id-1573800678986">
                                                                    <div id="column-id-1573800678986"
                                                                         class="sppb-column">
                                                                        <div class="sppb-column-addons">
                                                                            <div id="sppb-addon-wrapper-1573808445338"
                                                                                 class="sppb-addon-wrapper">
                                                                                <div id="sppb-addon-1573808445338"
                                                                                     class="clearfix ">
                                                                                    <div class="sppb-addon sppb-addon-text-block  ">
                                                                                        <div class="sppb-addon-content">
                                                                                            <?= $news[4] ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--                                                                </div>-->
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>


                                                <div class="col-xl-12">
                                                    <div class="card shadow">
                                                        <div class="card-header bg-transparent">
                                                            <div class="row align-items-center">
                                                <div class="col">
                                                <h3>
                                                    Коментарияҳо</h3>
                                            </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <?php
                                            $result = $dbOperations->getCommentById($id);
                                            While($row=mysqli_fetch_array($result)) {
                                                ?>
                                                <div class="col-xl-12 mt-2">
                                                    <div class="card shadow">
                                                        <div class="card-header bg-transparent">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-8">
                                                                    <h3 style="color: #1d55c1;">
                                                                        <?= $row['name'] ?>
                                                                    </h3>
                                                                    <h4>
                                                                        <?= $row['text'] ?></h4>
                                                                </div>
                                                                <div class="col-md-4 text-right"
                                                                     style="font-size: small;">
                                                                    <p><?= $date ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <div class="col-xl-12 mt-2">
                                                <div class="card shadow">
                                                    <div class="card-header bg-transparent">
                                                        <div class="row align-items-center">

                                                            <div class="col">
                                                                <h5 class="text-uppercase text-muted ls-1 mb-1">
                                                                    Коментария гузоштан</h5>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <form role="form" method="post" enctype="multipart/form-data">
                                                        <div class="container-fluid mt--8">
                                                            <div class="row">
                                                                <div class="card-body">
                                                                    <!-- Chart -->
                                                                    <div class="chart" style="height:auto">
                                                                        <div class="form-group mb-3">
                                                                            <div class="input-group input-group-alternative">
                                                                                <input class="form-control"
                                                                                       placeholder="Ном" name="name"
                                                                                       type="text" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <div class="input-group input-group-alternative">
                                                                                <input class="form-control"
                                                                                       placeholder="Рақами телефон"
                                                                                       name="phone" type="text"
                                                                                       required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <div class="input-group input-group-alternative">
                                                                                <textarea class="form-control"
                                                                                          placeholder="Матни пурра"
                                                                                          name="text"
                                                                                          style="height :150px"
                                                                                          required></textarea>

                                                                            </div>
                                                                        </div>
                                                                        <input type="submit" name="ok"
                                                                               class="btn btn-primary my-4"
                                                                               value="Сабт кардан">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                            <ul class="pager pagenav">
                                                <li class="previous">
                                                    <a class="hasTooltip"
                                                       href="view_news.php?id=<?= $id > 1 ? $id - 1 : '' ?>&category=<?= $category_id ?>"
                                                       rel="prev">
                                                        <span class="icon-chevron-left" aria-hidden="true"></span> <span
                                                                aria-hidden="true">Кафо</span> </a>
                                                </li>
                                                <li class="next">
                                                    <a class="hasTooltip"
                                                       href="view_news.php?id=<?= $id + 1 ?>&category=<?= $category_id ?>">
                                                        <span aria-hidden="true">Пеш</span> <span
                                                                class="icon-chevron-right" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        </div>


                                        <div class="col-sm-3 col-sm-pull-1">
                                            <div class="authors-posts-wrap">
                                                <h3>Хабарҳои нав</h3>
                                                <ul class="author-post-items">
                                                    <?php
                                                    $result = $dbOperations->get_new('tj');
                                                    for ($i = 1; $i <= 5; $i++) {

                                                        if ($row = mysqli_fetch_array($result)) {
                                                            if ($row[0] != $id) {
                                                                ?>
                                                                <li>
                                                                    <a href="view_news.php?id=<?= $row[0] ?>&category=<?= $category_id ?>">
                                                                        <h3><?= $row[1] ?></h3>
                                                                    </a>
                                                                    <p>
                                                                    <p><?= $row[2] ?></p>
                                                                    <p><?= $row[5] ?></p>
                                                                </li>
                                                                <?
                                                            }
                                                        }


                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                        </div>
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

<!-- Mirrored from demo2.joomshaper.com/2019/newsberg/index.php/business-blog/for-you-what-being-clever-great-keep-it-up by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 09:15:58 GMT -->
</html>